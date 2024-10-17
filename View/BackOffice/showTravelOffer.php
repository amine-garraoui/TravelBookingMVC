<?php
include_once("../Model/TravelOffer.php");

$offre1 = new TravelOffer(1, "Paris", 1200, "A wonderful trip to Paris");

echo "<h1>Informations de l'offre via var_dump:</h1>";
var_dump($offre1);

echo "<h1>Informations de l'offre via la méthode show:</h1>";
$offre1->show();
?>
