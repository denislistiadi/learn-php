<?php

class Car {
  public $brand;
  public $model;

  function __construct($brand, $model) {
    $this->brand = $brand;
    $this->model = $model;
  }

  function info() {
    return "Car brand: $this->brand, Model: $this->model";
  }
}

// Example usage
$myCar = new Car("Toyota", "Corolla");
echo $myCar->info();

echo "\n";

$anotherCar = new Car("Honda", "Civic");
echo $anotherCar->info();