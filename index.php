<?php

use Classes\Product;
 //Les inclusions
//require('Classes/Product.php');
require('autoloader.php');
// function autoloader_perso($className)
// {
//     var_dump($className);
//     require_once('Classes/' . $className . '.php');
//     //die('Test autoloader');
// }

spl_autoload_register('autoloader_perso');

echo "Bonjour";

//Creation de l'objet Hamac
$hamac = new Product();

//Changement du nom du Hamac
$hamac->setName('Hamac');
$hamac->setDescription('Incroyable produit');
$hamac->setPrice(67,83);
var_dump($hamac);

$parasol = new Product();
$parasol->setName('Parasol');
$parasol->setDescription('Incroyable Parasol');
$parasol->setPrice(736,99);
var_dump($parasol);

echo'<p>' . $parasol->getPrice().' €</p>';
echo'<p>' . $parasol->getDescription().'</p>';

//Appel d'une méthode du parasol
echo'<p>'. $parasol->displayPrice().'</p>';

//Affichage d'une constante
echo'<p>Nombre de vues par defaut des produits:'.Product::DEFAULT_NB_VIEWS.'</p>';

$voyage = new Category();


