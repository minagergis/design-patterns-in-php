<?php

namespace Tests;

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BmwCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase{

    /** @test */
    public function it_can_create_bmw_car() : void
    {
        $carFactory = new CarAbstractFactory(100);

        $bmwCar = $carFactory->createBMWCar();

        $this->assertInstanceOf(BmwCar::class,$bmwCar);
    }

    /** @test */
    public function it_can_create_benz_car() : void
    {
        $carFactory = new CarAbstractFactory(10000);

        $benzCar = $carFactory->createBenzCar();

        $this->assertInstanceOf(BenzCar::class,$benzCar);

    }
}