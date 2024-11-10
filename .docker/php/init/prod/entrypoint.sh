#!/bin/bash

# Naviguer vers le répertoire du projet
cd /var/www/html

# Fichier de verrouillage pour vérifier si les données initiales ont déjà été insérées
LOCKFILE=/home/first_run_done.lock

# Vérifier si c'est le premier démarrage du conteneur
if [ ! -f $LOCKFILE ]; then
	# Insérer le code à exécuter une seule fois

	# Créer le fichier de verrouillage de première exécution
	touch $LOCKFILE
	echo "Le conteneur démarre pour la première fois !"
else
	echo "Le conteneur a déjà été démarré auparavant ! Reprise là où nous nous sommes arrêtés..."
fi

# Appeler le point d'entrée de l'image parent php avec la commande passée
exec /usr/local/bin/docker-php-entrypoint "$@"