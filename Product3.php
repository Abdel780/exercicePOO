<?php 

class Product3
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

    
}