#!/bin/bash

# Utilisation : ./docker-stop.sh [--env=nom]
# Si aucun environnement n'est passé en paramètre à ce script,
# tous les conteneurs potentiellement en cours d'exécution pour cette application seront arrêtés

# Changer de répertoire pour celui où ce script est situé
cd "$(dirname "$0")"

CONTAINER_PREFIX="sao-"
DEFAULT_CONTAINERS=("samp-c")

# Valeurs par défaut des options
env=""

# Analyser les arguments passés à ce script
for arg in "$@"; do
	case $arg in
		--env=*)
			# Obtenir la valeur de l'argument après le signe égal
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
	# Arrêter les conteneurs spécifiques à cette application
	# Couper d'abord l'accès client aux applications avant d'arrêter les conteneurs de données
	# pour éviter les erreurs potentielles de corruption de données
	for container in "${DEFAULT_CONTAINERS[@]}"; do
		# Si le conteneur est en cours d'exécution
		if [ "$(sudo docker ps -q -f name=$CONTAINER_PREFIX$container)" ]; then
			# Arrêter le conteneur
			sudo docker stop $CONTAINER_PREFIX$container
		# Sinon, si le conteneur est arrêté
		elif [ "$(sudo docker ps -aq -f status=exited -f name=$CONTAINER_PREFIX$container)" ]; then
			printf "Le conteneur $CONTAINER_PREFIX$container est déjà arrêté.\n"
		fi
	done
	exit 0
else
	# Si un environnement est passé en paramètre à ce script
	# l'utiliser pour arrêter les conteneurs de l'environnement spécifié
	docker_choice=$env
fi

# Si aucune configuration Docker Compose ne peut être trouvée avec le nom de cet environnement
while [ ! -f "docker-compose.$docker_choice.yml" ] && [ ! -f "docker-compose.$docker_choice" ] && [ ! -f "docker-compose$docker_choice.yml" ]; do
	printf "Il n'y a pas de composition avec ce nom !\n"
	printf "Noms recherchés : docker-compose.$docker_choice.yml, docker-compose.$docker_choice, docker-compose$docker_choice.yml\n"
	exit 1
done
if [ -f "docker-compose.$docker_choice" ]; then
	docker_choice=docker-compose.$docker_choice
elif [ -f "docker-compose$docker_choice.yml" ]; then
	docker_choice=docker-compose$docker_choice.yml
else
	docker_choice=docker-compose.$docker_choice.yml
fi
printf "Vous avez choisi : $docker_choice\n"

# Arrêter les conteneurs de l'environnement spécifié
printf "Arrêt de la composition $docker_choice...\n"
sudo docker compose -f $docker_choice down

exit 0