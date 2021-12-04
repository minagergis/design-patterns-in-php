<?php

namespace Creational\AbstractFactory;

class BmwCar implements CarInterface {

    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice()
    {
        return $this->price + 120000;
    }
}