<?php

require 'autoloader.php';
require 'header.php';
$voitureDiesel1 = new VoitureDiesel('Renault', 'Diesel');
$voitureElectrique1 = new VoitureElectrique('Citroen', 'Electrique');
//var_dump($voitureDiesel1);
?>
<main class="container">

    <p>
    <?=$voitureDiesel1->getMarque();?>
    <?=$voitureDiesel1->getMoteur();?>
    </p>
    <p>
    <?=$voitureElectrique1->getMarque();?>
    <?=$voitureElectrique1->getMoteur();?>
    </p>
    <p>
    <?=$voitureElectrique1->demarrer();?>
    <?=$voitureElectrique1->delarrer();?>
    </p>
</main>

<?php include 'footer.html' ?>
