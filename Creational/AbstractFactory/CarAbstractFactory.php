<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory{
     private $tax = 10000;
     private $price;
     
     public function __construct($price)
     {
         $this->price = $price;
     }

    public function createBMWCar() : BmwCar
    {
        return new BmwCar($this->price);
     }

    public function createBenzCar() : BenzCar
    {
        return new BenzCar($this->price,$this->tax);

     }
}