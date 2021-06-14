<?php


namespace app\models;

use app\interfaces\IBasket;

class Basket extends Model implements IBasket
{
    protected int $item_id;
    protected string $session_id;
    protected float $price;
    protected int $quantity;
    protected int $user_id;
    protected float $full_price;

    public function __construct($db, $user_id = 0, $item_id = 0, $session_id = '', $price = 0, $quantity = 0)
    {
        parent::__construct($db);
        $this->item_id = $item_id;
        $this->session_id = $session_id;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->user_id = $user_id;
        $this->full_price = $this->getFullPrice();
    }

    public function getFullPrice()
    {
        return $this->price * $this->quantity;
    }

    protected function table()
    {
        return 'basket';
    }
    public function getFullBasketForUser() {
        return $this->getAll()->where();

    }
}