<?php

require 'autoloader.php';

$voiture = new Classes\Vehicule\Voiture('Renault','Essence');
var_dump($voiture);
echo 'Marque de ma voiture :'.$voiture->getMarque().'<br>'.'Moteur de ma voiture :'.$voiture->getMoteur();

 