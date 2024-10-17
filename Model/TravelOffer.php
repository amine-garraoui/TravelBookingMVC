<?php
class TravelOffer {
    private $id;
    private $titre;
    private $destination;
    private $date_depart;
    private $date_retour;
    private $prix;
    private $disponible;
    private $categorie;

    
    public function __construct($id, $titre, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie) {
        $this->id = $id;
        $this->titre = $titre;
        $this->destination = $destination;
        $this->date_depart = $date_depart;
        $this->date_retour = $date_retour;
        $this->prix = $prix;
        $this->disponible = $disponible;
        $this->categorie = $categorie;
    }

    
    public function show() {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Titre</th><th>Destination</th><th>Date de Départ</th><th>Date de Retour</th><th>Prix</th><th>Disponible</th><th>Catégorie</th></tr>";
        echo "<tr>";
        echo "<td>" . $this->id . "</td>";
        echo "<td>" . $this->titre . "</td>";
        echo "<td>" . $this->destination . "</td>";
        echo "<td>" . $this->date_depart . "</td>";
        echo "<td>" . $this->date_retour . "</td>";
        echo "<td>" . $this->prix . "</td>";
        echo "<td>" . ($this->disponible ? 'Oui' : 'Non') . "</td>";
        echo "<td>" . $this->categorie . "</td>";
        echo "</tr>";
        echo "</table>";
    }
}
?>
