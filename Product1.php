<?php 
// Creer un fichier Product1.php

// Créer la classe Product1 avec les mêmes propriétés que product sauf total.

// Modifier la visibilité des propriétés et faites une encapsulation grâce à des getter et setter.

// Finissez par instancier deux fois la classe et utilisez les méthodes précédemment créées pour modifier les valeurs de l’objet.


class Product1
{
    private string $title;
    private float $price;
    private int $quantity;

    public function setTitle(string $title) : static
    {
        $this->title = $title;
        return $this;    
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }


    public function setPrice(float $price) : static
    {
        $this->price = $price;
        return $this;    
    }
    public function getPrice() : ?float
    {
        return $this->price;
    }


    public function setQuantity(int $quantity) : static
    {
        $this->quantity = $quantity;
        return $this;    
    }
    public function getQuantity() : ?int
    {
        return $this->quantity;
    }


    public function calculerTotal() : float
    {
        return $this->price * $this->quantity;
    }
}


$chaise = new Product1();
$chaise->setTitle('chaise');
$chaise->setPrice(40)->setQuantity(2);
echo '<p>'. $chaise->getTitle() .'</p>';
echo '<p>'. $chaise->getPrice() .'</p>';
echo '<p>'. $chaise->getQuantity() .'</p>';


$commode = new Product1();
$commode->setTitle('commode');
$commode->setPrice(140)->setQuantity(3);
echo '<p>J\'ai acheté ' .$commode->getQuantity() . ' '. $commode->getTitle()  .'</p>';
echo "<p>Le total : " . $commode->calculerTotal() . "€</p>";
