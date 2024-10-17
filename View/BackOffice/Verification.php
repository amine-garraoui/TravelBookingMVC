<?php
include_once("../Model/TravelOffer.php");
include_once("../Controller/TravelOfferController.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = $_POST["destination"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    
    $offre1 = new TravelOffer(1, $destination, $price, $description);
    
    echo "<h1>Informations via var_dump:</h1>";
    var_dump($offre1);
    
    $controller = new TravelOfferController();
    echo "<h1>Informations via la méthode showTravelOffer:</h1>";
    $controller->showTravelOffer($offre1);
}
?>
