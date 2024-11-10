# Contribuer au Portfolio

Toutes les informations relatives à la contribution au projet se trouvent dans ce fichier. Il est **obligatoire** de le lire avant de contribuer au projet afin de suivre les conventions et de faciliter le processus de développement pour tout le monde. Merci de votre compréhension !

- [Contribuer au Portfolio](#contribuer-au-portfolio)
  - [Obtenir le projet](#obtenir-le-projet)
  - [Installation \& Lancement](#installation--lancement)
    - [Via Docker](#via-docker)
      - [Prérequis](#prérequis)
        - [Installer WSL pour utiliser Docker sur Windows](#installer-wsl-pour-utiliser-docker-sur-windows)
        - [Installer Docker sur Linux/WSL](#installer-docker-sur-linuxwsl)
      - [Lancer la composition Docker](#lancer-la-composition-docker)
    - [Code](#code)
      - [Conventions du projet](#conventions-du-projet)
      - [Indentation](#indentation)
      - [Qualité du code](#qualité-du-code)

## Obtenir le projet

Le projet est hébergé dans un dépôt en ligne. Il est recommandé d'associer vos clés SSH à votre compte pour cloner le projet via SSH pour des raisons de sécurité, mais il est également possible de le cloner via HTTPS.

Naviguez vers le dossier où vous souhaitez cloner le projet (après l'avoir créé) :  
Sur Windows :

```bat
cd %userprofile%\Documents\Projects\
```

Sur Linux :

```bash
cd ~/projects/
```

Cloner via SSH :  

```bash
git clone git@github.com:MichaelAceAnderson/Portfolio.git
```

Cloner via HTTPS :

```bash
git clone https://github.com/MichaelAceAnderson/Portfolio.git
```

## Installation & Lancement

Avant toute chose, n'oubliez pas de compiler les fichiers SCSS en CSS, notamment via l'extension VSCode [Live Sass Compiler](https://marketplace.visualstudio.com/items?itemName=ritwickdey.live-sass).

### Via Docker

L'application peut fonctionner dans un conteneur Docker. Pour ce faire, vous devez installer Docker et Docker Compose, puis lancer la composition Docker.

Exécuter le projet directement en local est moins recommandé car cela nécessite l'installation et la configuration chronophages de plusieurs applications (Nginx/PHP/...). Par conséquent, l'utilisation de Docker pour lancer l'application est préférée.

#### Prérequis

Pour lancer le projet via Docker, Docker et Docker Compose doivent être installés, ce qui n'est pas directement disponible sur Windows (du moins pas via la ligne de commande).

##### Installer WSL pour utiliser Docker sur Windows

Vous pouvez utiliser WSL (Windows Subsystem for Linux) pour installer Debian sur lequel Docker et Docker Compose seront installés :

```bat
REM Définir la version de WSL à utiliser (nous utilisons la version 2 pour pouvoir utiliser Docker)
wsl --set-default-version 2
REM Installer WSL
wsl --install -d Debian
REM Lancer WSL
wsl
```

##### Installer Docker sur Linux/WSL

```bash
# Mettre à jour la liste des paquets
sudo apt-get update
# Mettre à niveau les paquets déjà installés
sudo apt-get upgrade
# Supprimer les anciennes versions de Docker
sudo apt remove docker docker-engine docker.io containerd runc

# Installer les dépendances nécessaires
sudo apt install --no-install-recommends apt-transport-https ca-certificates curl gnupg2
# Obtenir le script d'installation de Docker
curl -fsSL https://get.docker.com -o get-docker.sh
# Exécuter le script d'installation de Docker
sudo sh get-docker.sh

# S'assurer que Docker démarre au démarrage de la machine
sudo systemctl enable docker
# Démarrer le service Docker
sudo service docker start

# Vérifier que Docker est correctement installé
sudo docker run --rm hello-world
```

Pour exécuter des commandes liées à Docker, l'utilisateur doit avoir les droits du groupe docker (ou exécuter en tant que `root`).
Si le groupe docker n'existe pas déjà, créez-le :

```bash
sudo groupadd docker
```

Ensuite, ajoutez votre utilisateur au groupe docker :

```bash
sudo usermod -aG docker $USER
```

#### Lancer la composition Docker

Le projet est organisé de manière à identifier facilement les fichiers liés à Docker et ceux liés à l'application.
Les Dockerfiles sont situés dans un dossier `.docker` puis dans un sous-dossier lié à l'image concernée (Exemple : [.docker/nginx/Dockerfile.dev](.docker/nginx/Dockerfile.dev)). Il y a un fichier [.docker/pf-network.dev.yml](.docker/pf-network.dev.yml) dans le dossier `.docker` qui contient les règles d'interaction entre les différents services nécessaires au fonctionnement de l'application.
Il y a aussi un fichier [.dockerignore](.dockerignore) qui permet d'ignorer certains fichiers lors de la copie des fichiers sources de l'application dans leurs conteneurs Docker respectifs.

Pour lancer l'application, naviguez vers le dossier de configuration Docker et démarrez la composition Docker Compose via le script préparé :

```bash
cd ./.docker
# NOTE ⚠️: Le script docker-start.sh doit être exécuté en tant que root et nécessite les droits du groupe docker
# Il est également possible de passer des arguments pour spécifier l'environnement (dev ou prod) et choisir de reconstruire les conteneurs, par exemple, ./docker-start.sh --env=pf-compose.dev.yml --rebuild
./docker-start.sh
```

Le fichier [pf-network.dev.yml](./.docker/pf-network.dev.yml) exécutera alors la configuration Dockerfile de chaque image d'application (Exemple : [.docker/nginx/Dockerfile.dev](.docker/nginx/Dockerfile.dev)) pour construire les conteneurs.

Les environnements sont séparés en trois : local, dev et prod. L'environnement local ne dépend pas de Docker, mais le script [docker-start.sh](.docker/docker-start.sh) permet de spécifier un environnement dev ou prod et d'utiliser automatiquement les fichiers Docker Compose et Dockerfile correspondants.

Une fois le conteneur lancé, il est possible de l'explorer de l'intérieur et d'exécuter des commandes via le shell :

```bash
sudo docker exec -it pf-php-c sh
```

L'application sera alors disponible sur localhost sur les ports exposés dans la configuration Docker Compose (Exemple : [pf-network.dev.yml](.docker/pf-network.dev.yml)).

### Code

#### Conventions du projet

#### Indentation

L'indentation doit être faite avec des tabulations et non des espaces.  
Utilisez le formateur de code [Prettier](https://prettier.io/) pour garantir un style de code cohérent. [Prettier pour VSCode](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)

#### Qualité du code

- Use LF line endings
- Votre code doit être aussi modulaire et réutilisable que possible.
- Les fichiers doivent être regroupés dans une hiérarchie de dossiers selon leur rôle.
- Votre code doit être aussi explicite que possible. Si vous ne trouvez pas de moyen de le rendre ainsi, commentez "pourquoi" et non "comment" vous l'avez fait.
- Nommez explicitement les variables et les fonctions (qui doivent rester courtes) pour éviter le besoin de commentaires.
- Les messages d'erreur doivent contenir autant d'informations que possible et être basés sur les éléments inclus dans la signature de la fonction concernée pour inclure des informations sur le contexte de l'erreur.
- Les noms de fichiers, dossiers, variables et le code en général doivent être en anglais.
- Les commentaires doivent être en anglais.
- Les variables et fonctions doivent suivre les conventions de leur langage respectif.
  - HTML :
    - [Guide de code](https://codeguide.co/#html-syntax)
    - Les titres h1, h2, h3, etc. doivent être utilisés dans l'ordre au sein de la même section pour maintenir une hiérarchie logique même sans CSS.
  - CSS & SCSS :
    - kebab-case
    - Isolation des composants (similaire à BEM pour éviter les conflits en cas de styles globaux)
    - Les feuilles de style doivent gérer la présentation, pas la logique (qui doit être déléguée au HTML).
  - JavaScript :
    - camelCase
    - [Guide de style JavaScript Airbnb](https://github.com/airbnb/javascript)
  - PHP :
    - camelCase
    - [PSR-12](https://www.php-fig.org/psr/psr-12/)
