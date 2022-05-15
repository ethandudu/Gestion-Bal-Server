# Gestion-Bal-Server
![GitHub release (dernière en date)](https://img.shields.io/github/v/release/ethandudu/Gestion-Bal-Server-blue?display_name=release&style=for-the-badge&logo=github)
![Issues ouvertes](https://img.shields.io/github/issues/ethandudu/Gestion-Bal-Server?style=for-the-badge&logo=github)
![Version MariaDB](https://img.shields.io/badge/MariaDB-10.3.34-green?style=for-the-badge&logo=mariadb)
![Version PHP](https://img.shields.io/badge/PHP-7.4.3-green?style=for-the-badge&logo=php)
![Version Apache](https://img.shields.io/badge/Apache-2.4.41-green?style=for-the-badge&logo=apache)
![Version Composer](https://img.shields.io/badge/Composer-1.10.1-green?style=for-the-badge&logo=composer)
![Version Ubuntu](https://img.shields.io/badge/Ubuntu-20.04-green?style=for-the-badge&logo=ubuntu)

Partie serveur de Gestion-Bal-Windows et Gestion-Bal-Android

## Somaire
- Installation
  - Pré-requis
  - Procédure
- Informations utiles

## Installation
### Pré-requis
Les pré-requis indiqués ci-dessous sont ceux pour lesquels le serveur a été testé.
- Ubuntu 20.04 (ou supérieur)
- Apache 2.4.41
- MariaDB 10.3.34
- PHP 7.4.3
- Composer 1.10.1

### Procédure
- Installer les pré-requis
- Cloner le repos
- L'extraire dans votre serveur web (généralement situé dans `/var/www/html`)
- Importer le fichier database.sql dans la base de données
- Ouvrir les ports dans votre routeur (généralement 80/443/3306)
- Modifier les fichiers `mail.php`, `mailuser.php`, `mailmessage.php` avec vos informations de connexion SMTP.
- Vous pouvez maintenant vous rendre sur ![Gestion-Bal-Windows](https://github.com/ethandudu/Gestion-Bal-Windows) ou ![Gestion-Bal-Android](https://github.com/ethandudu/Gestion-Bal-Android) pour installer les clients.

## Informations utiles
- Identifiants de connexion par défaut pour les application : `admin` / `admin`
- Les fichiers `versionbal.txt`, `versionandroid.txt` et `versionadmin.txt` sont à modifier lors de la publication d'une mise à jour du client Windows ou Android. Etant donné que les clients ne sont pas fournis avec un installateur, ces fichiers servent à la vérification de version.
- ![Licence](https://github.com/ethandudu/Gestion-Bal/Server/blob/main/LICENSE.md)