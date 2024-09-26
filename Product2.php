<?php

class Product2
{
    private string $title;
    private float $price;
    private int $quantity;

    public function setPrice(float $value) : static
    {
        $this->price = $value;
        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setTitle(string $value) : static
    {
        $this->title = $value;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
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

    public function calculerTotal() : string
    {
        if(self::validationPrixQuantite($this->quantity, $this->price)){
            return $this->price * $this->quantity . "€";
        }else {
            return "le prix et/ou la quantité n'est pas bonne";
        }
    }

    static function validationPrixQuantite($prix, $quantite) :bool
    {
        if($prix > 0 && $quantite > 0){
            return true;
        }else {
            return false;
        }
    }
}

$commode = new Product2();
$commode->setQuantity(10);
$commode->setPrice(0);
$commode->setTitle('Commode en bois');

echo "<p>" . $commode->getTitle() . ". Prix :" . $commode->getPrice().  " Quantité : " . $commode->getQuantity() . ".</p>";
echo "<p>Le total : " . $commode->calculerTotal() . "</p>";

$chaise = new Product2();
$chaise->setTitle("Chaise en bois");
$chaise->setPrice(20);
$chaise->setQuantity(0);

echo "<p>" . $chaise->getTitle() . ". Prix :" . $chaise->getPrice().  " Quantité : " . $chaise->getQuantity() . ".</p>";
if($chaise->getPrice() > 0 && $chaise->getQuantity()){
    echo "<p>Le total : " . $chaise->calculerTotal() . "</p>";
} else {
    echo "<p>" . $chaise->calculerTotal() . "</p>";
}