<?php

use Classes\User;
include('autoloader.php');

//Creation d'un User

$user1 = new User();

//Changement de l'email
$user1->setEmail('test@gmail.com');

//Affichage de l'email
echo $user1->getEmail();


