#!/bin/bash

# Utilisation : ./docker-destroy.sh --env=nom
# Si aucun environnement n'est passé en paramètre à ce script,
# l'utilisateur sera invité à choisir l'environnement docker-compose à utiliser

# Valeurs par défaut des options
env=""

# Analyser les arguments passés à ce script
for arg in "$@"; do
	case $arg in
		--env=*)
			# Récupérer la valeur de l'argument après le signe égal
			env="${arg#*=}"
			;;
		*)
			printf "\nUtilisation : $(basename "$0") [--env=nom]\n"
			printf "Options :\n"
			printf "  --env			Spécifie l'environnement docker-compose à utiliser (par exemple, --env=dev)\n"
			exit 1
			;;
	esac
done

# Si l'environnement n'est pas spécifié
if [ -z "$env" ]; then
	printf "\nChoisissez l'environnement docker-compose à utiliser :\n"
	# Lister tous les fichiers yml dans le répertoire courant et inviter l'utilisateur à en choisir un
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

# Arrêter les conteneurs de l'environnement spécifié
# supprimer les conteneurs et les réseaux
printf "Arrêt de la composition $docker_choice et suppression des volumes...\n"
sudo docker compose -f $docker_choice down --volumes
# Supprimer les conteneurs de l'environnement spécifié
printf "Suppression des conteneurs de la composition $docker_choice...\n"
sudo docker compose -f $docker_choice rm -f

exit 0
