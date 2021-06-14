<?php


namespace app\models\exercise;


class Product_thing extends Product
{
    public function __construct(string $name = '', string $description = '', int $price = 0, int $quantity = 0)
    {

        parent::__construct($name, $description, $price, $quantity);
        $this->final_price();
    }

    public function final_price()
    {
        parent::$full_price = $this->price * $this->quantity;
        return $this->price * $this->quantity;

    }
}