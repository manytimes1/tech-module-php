<?php

class Person
{
    private $name;
    private $id;
    private $age;

    public function __construct($name, $id, $age)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$people = [];

while (($input = readline()) != "End") {
    $data = explode(" ", $input);
    $name = $data[0];
    $id = $data[1];
    $age = $data[2];

    $person = new Person($name, $id, $age);
    array_push($people, $person);
}
usort($people, function ($a, $b) {
    return $a->getAge() <=> $b->getAge();
});

foreach ($people as $person) {
    /* @var Person $person */
    echo "{$person->getName()} with ID: {$person->getId()} is {$person->getAge()} years old."
        . PHP_EOL;
}
