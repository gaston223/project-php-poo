<?php
 //Les inclusions
//require('Classes/Product.php');

function autoloader_perso($className)
{
    var_dump($className);
    require_once('Classes/' . $className . '.php');
    //die('Test autoloader');
}

spl_autoload_register('autoloader_perso');

echo "Bonjour";

//Creation de l'objet Hamac
$hamac = new Product();

//Changement du nom du Hamac
$hamac->name='Hamac';
$hamac->description='Incroyable produit';
$hamac->price=18.99;
var_dump($hamac);

$parasol = new Product();
$parasol->name='Parasol';
$parasol->description='Incroyable Parasol';
$parasol->price=99;
var_dump($parasol);

echo'<p>' . $parasol->price.' €</p>';

//Appel d'une méthode du parasol
echo'<p>'. $parasol->displayPrice().'</p>';

//Affichage d'une constante
echo'<p>Nombre de vues par defaut des produits:'.Product::DEFAULT_NB_VIEWS.'</p>';

$voyage = new Category();


