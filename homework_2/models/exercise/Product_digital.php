<?php


namespace app\models\exercise;


class Product_digital extends Product
{
    public function __construct(string $name = '', string $description = '', int $price = 0, int $quantity = 0)
    {

        parent::__construct($name, $description, $quantity, $price);
        $this->final_price();
    }
    public function final_price()
    {
        parent::$full_price = ($this->price / 2) * $this->quantity;
        return ($this->price / 2) * $this->quantity;
    }
}