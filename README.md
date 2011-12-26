Habobo 
========================
Le code a été developpé avec Symfony. Pour toute information sur l'installation veuillez consulter la doc 
[Installation chapter](http://symfony.com/doc/current/book/installation.html).
Les lignes qui suivent vont vous permettre de configurer l'appli en local pour pouvoir y contribuer

1) Télécharger le code avec git  (tourner Symfony2)
-------------------------------------

Placer vous dans un repertoire où vous désirer avoir l'appli.
Executer
  
    git clone http://github.com/ntictogolais/Habobo.git
    cd Habobo    

!!! Note : Nous considérons <habobo_home> comme le chemin de Habobo dans la suite. !!!

2) Installation
---------------

Once you've downloaded the standard edition, installation is easy, and basically
involves making sure your system is ready for Symfony.

### a) Check your System Configuration

Before you begin, make sure that your local system is properly configured
for Symfony. To do this, execute the following:

    php app/check.php

If you get any warnings or recommendations, fix these now before moving on.

### b) Install the Vendor Libraries

If you downloaded the archive "without vendors" or installed via git, then
you need to download all of the necessary vendor libraries. If you're not
sure if you need to do this, check to see if you have a ``vendor/`` directory.
If you don't, or if that directory is empty, run the following:

    php bin/vendors install

Note that you **must** have git installed and be able to execute the `git`
command to execute this script. If you don't have git available, either install
it or download Symfony with the vendor libraries already included.

### c) Configurer un virtual host
...

### d) Access the Application via the Browser

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
