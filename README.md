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

### c) Configurer un virtual host
...

### d) Configurer la base de données (Doctrine)
Symfony2 va nous créer une base de données sous mysql.
Configurez les paramètres de votre base de données 
    Editer app/config/parameters.ini et mettez les bons paramètres

Créer la base:
    php app/console doctrine:database:create
    php app/console doctrine:schema:update --force

### e) Quelques dernières étapes.
...


### f) Access the Application via the Browser

Congratulations! You're now ready to use Symfony. If you've unzipped Symfony
in the web root of your computer, then you should be able to access the
web version of the Symfony requirements check via:

    http://localhost/Symfony/web/config.php

If everything looks good, click the "Bypass configuration and go to the Welcome page"
link to load up your first Symfony page.

You can also use a web-based configurator by clicking on the "Configure your
Symfony Application online" link of the ``config.php`` page.

To see a real-live Symfony page in action, access the following page:

    web/app_dev.php/demo/hello/Fabien

3) Documentation Symfony!
-------------------------
Lancer l'appli.


4) Proposer des ajouts/modifications !
--------------------------------------

Enjoy!
