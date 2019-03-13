<?php

class Student
{
    private $firstName;
    private $lastName;
    private $age;
    private $city;

    public function __construct($firstName, $lastName, $age, $city)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->city = $city;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getFullName()
    {
        return $this->firstName . " " . $this->getLastName();
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getCity()
    {
        return $this->city;
    }
}
$studentsInfo = [];

while (($input = readline()) != "end") {
    $data = explode(" ", $input);
    $student = new Student($data[0], $data[1], $data[2], $data[3]);
    array_push($studentsInfo, $student);
}
$city = readline();

foreach ($studentsInfo as $value) {
    /* @var Student $value  */
    if ($value->getCity() == $city) {
        printf("%s is %d years old." . PHP_EOL, $value->getFullName(), $value->getAge());
    }
}
