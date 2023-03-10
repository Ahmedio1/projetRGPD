# Mise en place LAMP + NAS

## LAMP 

* Linux
* Apache
* Mysql
* PHP

Linux :
Nous sommes parties sur une VM debian sans interface graphique.

Apache :
Nous avons installé sur celle-ci Apache2.

Mysql :
Nous avons utilisé MariaDB.Il y a seulement un seul utilisateur "rgpdgroupe2" qui possède tous les droits sur la base de données information.

PHP :
Nous avons installé la version 7.4 de PHP.


### Le formulaire

Pour le formulaire, nous sommes avons utilisé le framework Laravel.
Celui-ci nous permet de créer une base de données et d'y injecter directement les informations qu'on récupère dans le formulaire avec l'aide du controller.
Nous effectuons une vérification des informations au préalable pour éviter de recevoir n'importe quoi ou bien des injections SQL.

## Le NAS

Pour le NAS, nous avons configuré un VM sous OMV.
Dans celui-ci, nous créons un nouveau DISK qui stockera les backups.
Nous créons un utilisateur qui aura tous les droits (FTP, utilisation du disque => le disque qui stock les backups) 

## le Backup

Nous devons envoyer le backup enregistré sur le LAMP dans le serveur NAS.

Pour cela, nous allons utiliser la commande mysqldump (l'utilisateur crée MYSQL crée au-dessus permettra cela).
Et grâce au protocole ftp nous allons envoyer le fichier crée dans le NAS.

On utilisera cron qui est une commande linux permettant l'automatisation des tâches.
Ce que nous voulons :
* crée le fichier backup. (mysqldump)
* Le crypter. (on utiliser openssl avec une commande)
* L'envoyer (ftp)

On créera un fichier shell qui permettra de faire le mysqldump, le cryptage et l'envoie du ficher.
Cron permettra de lancer tous les jours le script shell.

