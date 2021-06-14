<?php


namespace app\models;


use app\interfaces\IBasket;

class Order extends Model implements IBasket
{
    protected int $basket_id;
    protected string $currency;
    protected int $id;
    protected int $full_quantity;

    /**
     * Order constructor.
     * @param int $basket_id
     * @param string $currency
     * @param int $id
     * @param int $full_quantity
     */
    public function __construct($db, int $basket_id = 0, string $currency = 'ruRU', int $id = 0, int $full_quantity = 0)
    {
        parent::__construct($db);
        $this->basket_id = $basket_id;
        $this->currency = $currency;
        $this->id = $id;
        $this->full_quantity = $full_quantity;
    }

    public function getFullPrice()
    {
        $this->getOne(1);
    }

    public function table() {
        return 'orders';
    }
}