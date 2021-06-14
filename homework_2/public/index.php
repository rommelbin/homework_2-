<?php

use app\models\{Product, User, Basket, Order};
use app\engine\Db;
use app\models\exercise\{Product_digital, Product_thing, Product_weight};

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Product(new Db());
$user = new User(new Db());
$user = new User(new Db());
$product1 = new Product(new Db(), '1', 'dad', 'Assad', '2500');
$basket = new Basket(new Db(), 1, 1, 'asdasda', '1500', '6');
$order1 = new Order(new Db(), '1', 'ruRU', '15', '100');

$product_digital = new Product_digital('Apple', 'Apple', '100', '2');
$product_thing = new Product_thing('Apple', 'Apple', '100', '2');
$product_weight = new Product_weight('Apple', 'Apple', '100', '2');

echo '<pre>';
var_dump($product_digital);
echo $product_digital->final_price() . '<br>';
var_dump($product_weight);
echo $product_weight->final_price() . '<br>';
var_dump($product_thing);
echo $product_thing->final_price() . '<br>';
echo $basket->getFullBasketForUser();




die();
/*
//CREATE
$product = new Product();
$product->name = 'Чай';
$product->price = 23;
$product->insert();

//READ
$product = new Product();
$product->getOne(5);
$product->getAll();

//UPDATE
$product = new Product();
$product->getOne(5);
$product->price = 25;
$product->update();

//DELETE
$product = new Product();
$product->getOne(5);
$product->delete();
*/