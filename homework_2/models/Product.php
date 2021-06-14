<?php

namespace app\models;

class Product extends Model
{
    protected int $id;
    protected string $name;
    protected string $description;
    protected float $price;

    public function __construct($db, $id = 0, $name = '', $description = '', $price = 0)
    {
        parent::__construct($db);
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    protected function table()
    {
        return 'goods';
    }
}

