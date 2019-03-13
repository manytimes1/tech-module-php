<?php

class Person
{
    private $firstName;
    private $lastName;
    private $age;

    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$person = new Person(readline(), readline(), intval(readline()));
$firstNameOutput = "firstName: {$person->getFirstName()}". PHP_EOL;
$lastNameOutput = "lastName: {$person->getLastName()}" . PHP_EOL;
$ageOutput = "age: {$person->getAge()}";

printf("%s%s%s", $firstNameOutput, $lastNameOutput, $ageOutput);
