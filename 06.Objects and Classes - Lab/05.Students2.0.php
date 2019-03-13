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
        return $this->getFirstName() . " " . $this->getLastName();
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }


    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city): void
    {
        $this->city = $city;
    }
}
$studentInfo = [];

while (($input = readline()) != "end") {
    $data = explode(" ", $input);

    if (isStudentExist($studentInfo, $data[0], $data[1])) {
        foreach ($studentInfo as $student) {
            if ($student->getFirstName() == $data[0]
                && $student->getLastName() == $data[1]) {
                $student->setAge(intval($data[2]));
                $student->setCity($data[3]);
                break;
            }
        }
    } else {
        $student = new Student($data[0], $data[1], intval($data[2]), $data[3]);
        array_push($studentInfo, $student);
    }
}

function isStudentExist($studentInfo, $firstName, $lastName)
{
    foreach ($studentInfo as $student) {
        /* @var Student $student */
        if ($student->getFirstName() == $firstName
            && $student->getLastName() == $lastName) {
            return true;
        }
    }
    return false;
}
$city = readline();

foreach ($studentInfo as $value) {
    if ($value->getCity() === $city) {
        printf("%s is %d years old." . PHP_EOL, $value->getFullName(), $value->getAge());
    }
}
