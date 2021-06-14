<?php


namespace app\models\exercise;


abstract class Product
{
    public string $name;
    public string $description;
    public int $price;
    public int $quantity;
    static float $full_price;
    /**
     * Product constructor.
     * @param string $name
     * @param string $description
     * @param int $price
     * @param int $quantity
     */
    public function __construct(string $name = '', string $description = '', int $price = 0, int $quantity = 0)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    abstract function final_price();
}