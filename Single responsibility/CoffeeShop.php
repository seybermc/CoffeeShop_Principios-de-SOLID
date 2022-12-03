<?php

namespace App\Entity;

class CoffeeShop
{
    protected $products = [];

    public function addProduct($product = [])
    {
        $this->products = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function removeProduct($id)
    {
        // Logica para borrar producto.
    }
    
}

