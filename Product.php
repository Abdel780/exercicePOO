<?php

// Creez un fichier Product.php

// Créer une classe product avec comme propriété : title(string), price(float) , quantity (int), total(float)

// créer une méthode (c’est le nom des fonctions à l'intérieur des classes) qui va calculer le total du produit en multipliant le prix du produit par la quantité.

// Instancier deux fois la classe dans deux variables différentes, 

// par exemple $commode et $chaise,
// attribuez lui des valeurs.

// Puis afficher grâce dans un écho les propriétés de l’objet ainsi que le total.


class Product
{
    public string $title;
    public float $price;
    public int $quantity;
    public float $total;

    public function calculPoduits()
    {
        return $this->total = $this->price * $this->quantity;
    }

}

$chaise = new Product();

$chaise->title = "chaise";
$chaise->price = 70;
$chaise->quantity = 2;
$chaise->calculPoduits();
echo "<p> Les " . $chaise->title . " coute au total : " . " $chaise->total  € </p>";

echo "<pre>";
var_dump($chaise);
echo "</pre>";

$commode = new Product();

$commode->title = "commode";
$commode->price = 170;
$commode->quantity = 3;
$commode->calculPoduits();
echo $commode->total;

echo "<pre>";
var_dump($commode);
echo "</pre>";


