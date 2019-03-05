<?php

//Cet autoloader permet de faire les "require" des classes se trouvant dans le dossier "Classes"
//On incluera donc ce fichier dans chaque fichier qui utlisera une classe se trouvant dans le dossier "Classes"

function autoloader_perso($className)
{
    //var_dump($className);
    require_once('Classes/' . $className . '.php');
    //die('Test autoloader');
}

spl_autoload_register('autoloader_perso');