<?php include_once 'vendor/autoload.php';

use App\CoffeeShop;

$products = [
    ['id' => 1, 'name' => 'Negro' , 'price' => 25],
    ['id' => 2, 'name' => 'Latte' , 'price' => 35],
    ['id' => 3, 'name' => 'Capuchino' , 'price' => 45],
];

$shop = new CoffeeShop();  

$shop->addProducts($products);

$menu = new \App\Menu();


echo $menu->view($shop->getProducts());