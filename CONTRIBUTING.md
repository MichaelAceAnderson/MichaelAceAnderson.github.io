# Contribuer au Portfolio

Toutes les informations relatives à la contribution au projet se trouvent dans ce fichier. Il est **obligatoire** de le lire avant de contribuer au projet afin de suivre les conventions et de faciliter le processus de développement pour tout le monde. Merci de votre compréhension !

- [Contribuer au Portfolio](#contribuer-au-portfolio)
  - [Obtenir le Projet](#obtenir-le-projet)
  - [Installation \& Lancement](#installation--lancement)
    - [Via Docker](#via-docker)
      - [Prérequis](#prérequis)
        - [Installer WSL pour utiliser Docker sur Windows](#installer-wsl-pour-utiliser-docker-sur-windows)
        - [Installer Docker sur Linux/WSL](#installer-docker-sur-linuxwsl)
      - [Lancer la Composition Docker](#lancer-la-composition-docker)
    - [Localement (non recommandé)](#localement-non-recommandé)
  - [Conception Technique](#conception-technique)
    - [Environnement de Développement](#environnement-de-développement)
  - [Conventions du Projet](#conventions-du-projet)
    - [Versioning](#versioning)
    - [Git](#git)
    - [Code](#code)
      - [Indentation](#indentation)
      - [Qualité du Code](#qualité-du-code)
  - [Documentation Front-end](#documentation-front-end)
    - [Structure Angular](#structure-angular)
    - [Logique de l'Application](#logique-de-lapplication)

## Obtenir le Projet

Le projet est hébergé dans un dépôt en ligne. Il est recommandé d'associer vos clés SSH à votre compte pour cloner le projet via SSH pour des raisons de sécurité, mais il est également possible de le cloner via HTTPS.

Naviguez vers le dossier où vous souhaitez cloner le projet (après l'avoir créé) :  
Sur Windows :

```bat
cd %userprofile%\Documents\Projects\Portfolio\
```

Sur Linux :

```bash
cd ~/Portfolio/
```

Cloner via SSH :  

```bash
git clone git@github.com:MichaelAceAnderson/Portfolio.git
```

Cloner via HTTPS

```bash
git clone https://github.com:MichaelAceAnderson/Portfolio.git
```

## Installation & Lancement

### Via Docker

L'application peut fonctionner dans un conteneur Docker. Pour ce faire, vous devez installer Docker et Docker Compose, puis lancer la composition Docker.

Exécuter le projet directement localement est moins recommandé car cela nécessite l'installation et la configuration de plusieurs applications (Node/NPM/NVM), ce qui prend du temps. Par conséquent, il est préférable d'utiliser Docker pour lancer l'application.

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

#### Lancer la Composition Docker

Le projet est organisé pour identifier directement les fichiers liés à Docker et ceux liés à l'application.
Les Dockerfiles sont situés dans un dossier [.docker](.docker/) puis dans un sous-dossier lié à l'image et à l'environnement concernés (Exemple : [.docker/angular/Dockerfile.dev](.docker/angular/Dockerfile.dev)). Il y a un fichier [.docker/pf-ng-compose.dev.yml](.docker/pf-ng-compose.dev.yml) dans le dossier .docker qui contient les règles d'interaction entre les différents conteneurs nécessaires au fonctionnement de l'application.
Il y a également un fichier [.dockerignore](/.dockerignore) qui permet d'ignorer certains fichiers lors de la copie des fichiers sources de l'application dans leurs conteneurs Docker respectifs.

Pour lancer l'application, naviguez vers le dossier de configuration Docker et lancez le conteneur Docker Compose via le script préparé :

```bash
cd ./.docker
# Note: Vous pouvez choisir l'environnement de développement via --env, mettre la composition en fond avec --daemon
# et forcer la reconstruction des images avec --rebuild
./docker-start.sh
```

Le fichier [pf-ng-compose.dev.yml](.docker/pf-ng-compose.dev.yml) exécutera alors la configuration Dockerfile de l'application (Exemple : [.docker/angular/Dockerfile.dev](.docker/angular/Dockerfile.dev)).

Une fois le conteneur lancé, il est possible de l'explorer de l'intérieur et d'exécuter des commandes via le shell :

```bash
sudo docker exec -it pf-ng-angular-c sh
```

### Localement (non recommandé)

1. Installer Node Package Manager (NPM) et Node.js (NVM est recommandé pour gérer les versions de Node.js)
2. Installer les dépendances avec `npm install` dans le dossier [app](app/)
3. Assurez-vous que le backend est en cours d'exécution et que l'adresse/les ports sont configurés dans [.env.dev](.docker/angular/.env.dev)
4. Exécutez l'application avec `npm run dev` dans le dossier [app](app/)
5. L'application est accessible à `http://localhost:4200`

## Conception Technique

### Environnement de Développement

Pour référence, voici les dernières versions testées des applications utilisées pour le projet :

| Composant     | Version     |
|---------------|-------------|
| Node.js       | 22.1.0      |
| Angular       | 18.2.11     |
| Docker        | 26.0.1      |

## Conventions du Projet

### Versioning

Ce projet adhère à la [Gestion Sémantique des Versions](https://semver.org/lang/fr/). Le numéro de version est composé de trois parties : majeure, mineure et patch. Le numéro de version est incrémenté selon les règles suivantes :

- Majeure : rend toutes les applications liées dans les versions précédentes incompatibles avec la version actuelle
- Mineure : ajout de fonctionnalités de manière rétrocompatible
- Patch : corrections de bugs rétrocompatibles

Généralement, les versions doivent être incrémentées selon les règles suivantes :

- changement majeur : +1.0.0
- nouvelle fonctionnalité : +0.1.0
- correction de bug : +0.0.1
- autre (refactorisation, indentation, ...) : +0.0.01

### Git

⚠️ **Attention** : Testez toujours votre code et essayez de supprimer les erreurs/avertissements avant de commettre et/ou de soumettre une pull request.

- Les commits doivent décrire clairement leur contenu et rester courts. Le message de commit doit être en français et inclure à la fois le type de commit et la portée des modifications. Si la modification est globale ou non liée à une fonctionnalité/place spécifique dans le code, la portée est optionnelle.
  ⚠️ Si les modifications sont liées à un problème, la portée **doit** être le numéro du problème.
  - [Conventional Commits](https://www.conventionalcommits.org/fr/v1.0.0/)
    - `feat(scope)`: nouvelle fonctionnalité (ex. : *feat(#1): Authentification*)
    - `fix(scope)`: correction de bug (ex. : *fix(#2): Correction de l'erreur liée au login*)
    - `docs(scope)`: documentation (ex. : *docs(#3): Mise à jour du README*)
    - `style(scope)`: modifications qui n'affectent pas le code (espacement, formatage, etc.) (ex. : *style: Correction de l'indentation*)
    - `refactor(scope)`: modifications du code qui ne corrigent ni un bug ni n'ajoutent une fonctionnalité (ex. : *refactor(#5): Optimisation du code*)
    - `perf(scope)`: amélioration des performances (ex. : *perf(#6): Réduction du nombre de requêtes simultanées*)
    - `test(scope)`: ajout ou modification de tests (ex. : *test(#7): Ajout de tests unitaires*)
    - `conf(scope)`: modifications de la configuration de build (ex. : *conf(#8): Mise à jour du Dockerfile*)
    - `chore(scope)`: modifications de l'environnement de développement ou de l'organisation du projet (ex. : *chore(#9): Mise à jour du .gitignore*)
- Chaque branche doit être associée à un type de changement (voir ci-dessous) et être créée à partir de la branche `develop`. Chaque fois que vous terminez des modifications sur une branche, vous devez la faire réviser et fusionner dans `develop` afin que la branche puisse être supprimée et que les modifications puissent être intégrées dans le projet. Lorsque suffisamment de fonctionnalités sont prêtes, il est alors possible de fusionner `develop` dans `release/x.x.x` en fonction du numéro de version, puis d'apporter de petites modifications sur la branche de release en cas de bugs, et enfin de fusionner la branche de release dans `main` pour déployer les modifications.
  - [Gitflow](https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow)
    - `feat/xxxx-nom-de-la-fonctionnalité`: Nouvelle fonctionnalité référencée par le numéro du problème et une courte description (ex. : `feat/1-authentication`)
    - `fix/xxxx-nom-de-la-correction`: Correction de bug référencée par le numéro du problème et une courte description (ex. : `fix/2-login-error`)
    - `docs/xxxx-nom-de-la-docs`: Documentation référencée par le numéro du problème et une courte description (ex. : `docs/3-readme`)
    - `style/xxxx-nom-du-style`: Modifications de style référencées par le numéro du problème et une courte description (ex. : `style/4-indentation`)
    - `refactor/xxxx-nom-de-la-refactorisation`: Refactorisation référencée par le numéro du problème et une courte description (ex. : `refactor/5-optimization`)
    - `perf/xxxx-nom-de-la-perf`: Amélioration des performances référencée par le numéro du problème et une courte description (ex. : `perf/6-speed`)
    - `test/xxxx-nom-du-test`: Modifications de test référencées par le numéro du problème et une courte description (ex. : `test/7-unit`)

### Code

#### Indentation

L'indentation doit être faite avec des tabulations et non des espaces.
Utilisez le formateur de code [Prettier](https://prettier.io/) pour garantir un style de code cohérent. [Prettier pour VSCode](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)

#### Qualité du Code

- Utilisez des fins de ligne LF
- Votre code doit être aussi modulable et facilement réutilisable que possible.
- Les fichiers doivent être regroupés dans une hiérarchie de dossiers selon leur rôle
- Votre code doit être aussi explicite que possible. Si vous ne trouvez pas de moyen de le rendre ainsi, commentez "pourquoi" et non "comment" vous l'avez fait
- Nommez explicitement les variables et les fonctions (qui doivent rester courtes) pour éviter le besoin de commentaires
- Les noms de fichiers, de dossiers, de variables et le code en général doivent être en anglais
- Les commentaires doivent être en français
- Les variables et les fonctions doivent suivre les conventions de leur langage respectif
  - HTML :
    - [Guide de Code](https://codeguide.co/#html-syntax)
    - Les titres h1, h2, h3, etc. doivent être utilisés dans l'ordre au sein de la même section pour maintenir une hiérarchie logique même sans CSS.
  - CSS & SCSS :
    - kebab-case
    - Isolation des composants (similaire à BEM pour éviter les conflits en cas de styles globaux)
    - Les feuilles de style doivent gérer la présentation, pas la logique (qui doit être déléguée au HTML).
  - TypeScript :
    - camelCase
    - Utilisez les fonctions fléchées uniquement pour les fonctions anonymes.
    - Utilisez les fonctionnalités les plus rétrocompatibles possibles.
    - Tapez les variables et les fonctions autant que possible.

## Documentation Front-end

Le projet est développé en Angular, un framework JavaScript pour créer des interfaces utilisateur. Angular permet de créer des composants réutilisables et de les organiser en une hiérarchie pour créer des interfaces utilisateur (UI) dynamiques, similaire à React ou Vue.js.

### Structure Angular

Le projet est divisé en plusieurs parties en fonction des rôles du code :

- [public](app/public) : fichiers statiques (images, vidéos, etc.)
  NOTE : Il est obligatoire d'utiliser ce dossier pour les fichiers statiques, car Angular ne détecte pas certains fichiers autrement (par exemple, les polices).
- [src](app/src) : le code source de l'application

### Logique de l'Application

Les composants sont censés contenir uniquement des propriétés, des propagateurs d'événements et des fonctions de rendu. Les pages contiennent la logique de l'application et utilisent des événements et des données pour faire réagir les composants.
La logique des données est séparée autant que possible de la logique de l'interface utilisateur pour faciliter les tests et la réutilisation.
