<?php


namespace app\models\exercise;


class Product_weight extends Product
{
    public function __construct(string $name = '', string $description = '', int $price = 0, int $quantity = 0)
    {
        parent::__construct($name, $description, $price, $quantity);
        $this->final_price();
    }

    public function final_price()
    {
        if ($this->quantity >= 10 && $this->quantity <= 20) {
            parent::$full_price = ($this->price * 0.9) * $this->quantity;
            return ($this->price * 0.9) * $this->quantity;
        } else if ($this->quantity > 20) {
            parent::$full_price = ($this->price * 0.85) * $this->quantity;
            return ($this->price * 0.85) * $this->quantity;
        } else if($this->quantity < 10) {
            parent::$full_price = ($this->price * 0.85) * $this->quantity;
            return ($this->price * 0.85) * $this->quantity;

        }
    }
}
