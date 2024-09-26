<?php

abstract class Product4
{
    private string $title;
    private float $price;
    private int $quantity;

    public function __construct(string $title, float $price, int $quantity)
    {
        $this->title = $title;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function setTtile(string $title) : static
    {
        $this->title = $title;
        return $this;
    }

    public function getTtile() : string
    {
        return $this->title;
    }

    public function setPrice(float $price) : static
    {
        $this->price = $price;
        return $this;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function setQuantity(int $quantity) : static
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getQuantity() : int
    {
        return $this->title;
    }

    public function __toString()
    {
        return "Titre :  $this->title , Quantité : $this->quantity, Prix $this->price.";
    }
}

class meuble extends Product4
{
    public string $color;

    public function setColor(string $color) : static
    {
        $this->color = $color;
        return $this;
    }

    public function getColor() : ?string
    {
        return $this->color;
    }
} 

class vetement extends Product4
{
    public string $taille;

    public function setTaille(string $taille) : static
    {
        $this->taille = $taille;
        return $this;
    }

    public function getTaille() : ?string
    {
        return $this->taille;
    }
}


$meuble1 = new Meuble('Meuble Ikea', 250, 1 );

echo "<pre>";
echo $meuble1;
$meuble1->setColor('noir');
echo $meuble1->getColor();
echo "</pre>";


$pull1 = new Vetement('Pull', 2, 110);
$pull1->setTaille("M");
echo "<pre>";
var_dump($pull1);
echo "</pre>";










// Creer une classe abstract product4 qui reprends le contenue de de Product3 avec setter et getter et le construct

// Puis creer une classe Meuble qui prends une propriete et une methode supplementaire pour ajouter une couleur

// et creer une classe Vetement qui prends une propriete et une methode supplementaire pour ajouter une Taille

// Instanciez les deux derniere classe puis affichez les valeurs contenue dans l’objet.