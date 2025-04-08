<?php
abstract class Vehicle{
    abstract public function start();
    abstract public function stop();
}

class Car extends Vehicle{
    public function start(){
        return "Car is starting";
    }

    public function stop(){
        return "Car is stoping";
    }
}

$car = new Car();
echo $car->start();
echo $car->stop();
?>