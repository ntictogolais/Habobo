Habobo 
========================
Le code a été developpé avec Symfony. Pour toute information détaillée sur l'installation veuillez consulter la doc 
[Installation chapter](http://symfony.com/doc/current/book/installation.html).
Les lignes qui suivent vous permettront de configurer l'appli en local pour pouvoir y contribuer.
Vous aurez besoin d'installer et configurer sur votre poste:

   * git : [aide Git](http://help.github.com/) .
   * php/apache : [xampp](http://www.apachefriends.org/fr/xampp-windows.html)
 
1) Télécharger le code avec git  
--------------------------------

Ouvrez une console et placez vous dans le repertoire des applications web du serveur Apache ( htdocs avec xampp).

Executez:

    git clone http://github.com/ntictogolais/Habobo.git    
    cd Habobo    

> Note : Nous considérons HABOBO_HOME comme le chemin de Habobo dans la suite. !

2) Installation
---------------

Maintenant que vous avez le code, nous allons vérifier l'environnement.
### a) Vérifier la Configuration
    php app/check.php

Si vous avez des erreurs, corrigez les avant d'avancer.

### b) Installez les Vendor Libraries

    php bin/vendors install

### c) Configurer la base de données (Doctrine)

Symfony2 va nous créer une base de données sous mysql.
Pour avoir les bons paramètres,

    Editer app/config/parameters.ini et mettez les bons paramètres de connexion.

Créer la base:
    
    php app/console doctrine:database:create
    php app/console doctrine:schema:update --force

### d) Ajouter une entrée DNS
Ajouter une entrée dans /etc/hosts ou C:\Windows\System32\drivers\etc\host
    
    127.0.0.1       habobo.org www.habobo.org

### e) Ajouter un virtual host pour Apache (conf/extra/httpd-vhosts...)
Remplacer HABOBO_HOME par le chemin vers Habobo.
   
    <Directory "HABOBO_HOME/web">
      Options FollowSymLinks
      DirectoryIndex app_dev.php
      Order allow,deny
      Allow from all
    </Directory>
    
    <VirtualHost *:80>
      ServerAdmin votremail@gmail.com
      DocumentRoot "HABOBO_HOME/web"
      ServerName www.habobo.org  
      ServerAlias www.habobo.org
      ErrorLog "logs/habobo.error.log"
    
    </VirtualHost>

### f) Accédez à l'application 

    http://www.habobo.org
    
 

3) Documentation Symfony!
-------------------------
[Doc officielle](http://symfony.com/doc/current/).
[Tuto developpez.com](http://j-place.developpez.com/tutoriels/php/creer-premiere-application-web-avec-symfony2/)
[Google](http://www.google.fr)

4) Proposer des ajouts/modifications !
--------------------------------------
Consulter l'aide (voir lien plus haut) git pour créer des branches, clone, faire des pull etc.

Pour tout autre information, écrivez à ntictogolais@gmail.com
Pour tout bug, utiliser l'onglet Issues de la page ou envoyer un mail.


Enjoy!
