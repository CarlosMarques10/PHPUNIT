<?php
namespace app\libraries;

use app\exceptions\CartQuantityException;

class Cart{

    private array $products = [];

    public function add(Product $product){
        if(count($this->products) === 2){
            throw new CartQuantityException('Carrinho já atingiu o limite (2)');
        }
        $this->products[] = $product;
    }

    public function getCart(){
        return $this->products;
    }

}