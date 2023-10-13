# Application de Tableau interactif en temps réel

Cette application permet de créer un tableau interactif en temps réel où les utilisateurs peuvent sélectionner une couleur et cliquer sur des cellules pour les colorer. Les mises à jour sont diffusées en temps réel grâce à un serveur WebSocket.

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants sur votre système :

- **PHP**: Vous aurez besoin de PHP installé pour exécuter le serveur WebSocket et les scripts PHP. Vous pouvez télécharger PHP sur [php.net](https://www.php.net/downloads.php).

- **Composer**: Composer est un gestionnaire de dépendances PHP qui vous permet d'installer des bibliothèques, y compris Ratchet, pour le serveur WebSocket. Vous pouvez le télécharger sur [getcomposer.org](https://getcomposer.org/download/).

## Installation

1. **Installation des dépendances**:
Accédez au répertoire du projet et utilisez Composer pour installer les dépendances, y compris Ratchet, en exécutant la commande suivante :
composer install


2. **Configuration de la base de données**:
Assurez-vous d'avoir configuré les informations de connexion à votre base de données dans le fichier `index.php`. Modifiez les variables `$servername`, `$username`, `$password` et `$database` en conséquence.

3. **Exécution du serveur WebSocket**:
Exécutez le serveur WebSocket en utilisant la commande suivante :
php websocket_server.php

