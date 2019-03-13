<?php

class Catalog
{
    private $cars = [];
    private $trucks = [];

    public function __construct($cars, $trucks)
    {
        $this->cars = $cars;
        $this->trucks = $trucks;
    }

    public function getCars(): array
    {
        return $this->cars;
    }

    public function getTrucks(): array
    {
        return $this->trucks;
    }
}

class Truck
{
    private $brand;
    private $model;
    private $weight;

    public function __construct($brand, $model, $weight)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->weight = $weight;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}

class Car
{
    private $brand;
    private $model;
    private $horsePower;

    public function __construct($brand, $model, $horsePower)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->horsePower = $horsePower;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getHorsePower()
    {
        return $this->horsePower;
    }
}
$cars = [];
$trucks = [];
$result = [];

while (($input = readline()) != "end") {
    $data = explode("/", $input);

    switch ($data[0]) {
        case "Car":
            $car = new Car($data[1], $data[2], $data[3]);
            array_push($cars, $car);
            break;
        case "Truck":
            $truck = new Truck($data[1], $data[2], $data[3]);
            array_push($trucks, $truck);
            break;
    }
}
usort($cars, function ($a, $b) {
    return $a->getBrand() <=> $b->getBrand();
});
usort($trucks, function ($a, $b) {
    return $a->getBrand() <=> $b->getBrand();
});

$catalog = new Catalog($cars, $trucks);
array_push($result, $catalog);

foreach ($result as $item) {
    if (count($item->getCars()) > 0) {
        echo "Cars:" . PHP_EOL;

        foreach ($item->getCars() as $value) {
            echo "{$value->getBrand()}: {$value->getModel()} - {$value->getHorsePower()}hp" . PHP_EOL;
        }
    }

    if (count($item->getTrucks()) > 0) {
        echo "Trucks:" . PHP_EOL;

        foreach ($item->getTrucks() as $value) {
            echo "{$value->getBrand()}: {$value->getModel()} - {$value->getWeight()}kg" . PHP_EOL;
        }
    }
}
