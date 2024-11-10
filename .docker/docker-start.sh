#!/bin/bash

# Utilisation: ./docker-start.sh [--env=nom] [--rebuild] [--daemon]
# Si aucun argument n'est passé à ce script, l'utilisateur devra choisir l'environnement docker-compose à utiliser

# Changer de répertoire pour celui où se trouve ce script
cd "$(dirname "$0")"

# Valeurs par défaut des options
env=""
rebuild=false
daemon=false

# Analyser les arguments passés à ce script
for arg in "$@"; do
	case $arg in
		--env=*)
			# Obtenir la valeur de l'argument après le signe égal
			env="${arg#*=}"
			;;
		--rebuild)
			rebuild=true
			;;
		--daemon)
			daemon=true
			;;
		*)
			printf "\nUtilisation: $(basename "$0") [--env=nom] [--rebuild] [--daemon]\n"
			printf "Options:\n"
			printf "  --env			Spécifie l'environnement docker-compose à utiliser (par exemple, --env=samp-compose.dev.yml)\n"
			printf "  --rebuild		Force la reconstruction des images et la recréation des conteneurs\n"
			printf "	NOTE: Si vous avez sélectionné un environnement différent de l'habitude, vous devrez utiliser cette option pour que les changements s'appliquent correctement.\n"
			printf "	En effet, puisque les noms des conteneurs sont les mêmes, changer d'environnement sans reconstruire démarrera en fait les conteneurs de l'environnement précédent.\n"
			printf "  --daemon		Démarre les conteneurs en arrière-plan\n"
			exit 1
			;;
	esac
done

# Si ce n'est pas déjà fait, démarrer le service docker
# Essayer d'utiliser systemctl pour démarrer le service docker
sudo systemctl start docker >/dev/null 2>/dev/null
if [ $? -ne 0 ]; 
then
	# Si systemctl échoue, utiliser service
	printf "\nSystemctl a échoué, utilisation de service pour démarrer Docker\n"
	sudo service docker start
else
	# Si systemctl réussit
	printf "\nSystemctl a démarré avec succès le service docker"
fi

# Si l'environnement n'est pas spécifié
if [ -z "$env" ]; then
	printf "\nChoisissez l'environnement docker-compose à utiliser:\n"
	# Lister tous les fichiers yml dans le répertoire courant et demander à l'utilisateur d'en choisir un
	select file in $(ls -1 *.yml); do
		# Si l'utilisateur a choisi un fichier
		if [ -n "$file" ]; then
			# Obtenir le nom du fichier
			docker_choice=$file
			break
		else
			printf "\nChoix invalide. Veuillez réessayer.\n"
		fi
	done

else
	docker_choice=$env
fi

printf "\nVous avez choisi: $docker_choice\n"

# Si l'utilisateur veut forcer la reconstruction des images et la recréation des conteneurs
if [ "$rebuild" = true ]; then
	# Appeler le script de destruction des conteneurs (& volumes, ...)
	# en passant le fichier en argument
	./docker-destroy.sh --env=$docker_choice
	# Recréer les conteneurs de chaque service sans cache
	printf "Reconstruction de $docker_choice...\n"
	sudo docker compose -f $docker_choice build --no-cache
	# Démarrer le docker-compose en forçant la reconstruction/mise à jour des images et la recréation des conteneurs
	printf "Démarrage de $docker_choice...\n"
	if [ "$daemon" = true ]; then
		sudo docker compose -f $docker_choice up --pull="missing" --build --always-recreate-deps --force-recreate --no-deps -d
	else
		sudo docker compose -f $docker_choice up --pull="missing" --build --always-recreate-deps --force-recreate --no-deps
	fi
# Si l'utilisateur ne veut pas forcer la reconstruction des images et la recréation des conteneurs
else
	# Script pour démarrer le conteneur compose normalement
	printf "Démarrage de $docker_choice...\n"
	if [ "$daemon" = true ]; then
		sudo docker compose -f $docker_choice up -d
	else
		sudo docker compose -f $docker_choice up
	fi
fi

exit 0