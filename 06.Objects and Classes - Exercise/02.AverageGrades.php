<?php
// 90 pts in judge

class Student
{
    private $name;
    private $grades = [];
    private $average;

    public function __construct($name, array $grades, $average)
    {
        $this->setName($name);
        $this->setGrades($grades);
        $this->setAverage($average);
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setGrades($grades): void
    {
        $this->grades = $grades;
    }

    public function setAverage($average): void
    {
        $this->average = $average;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGrades()
    {
        return $this->grades;
    }

    public function getAverage()
    {
        return $this->average;
    }
}
$num = intval(readline());
$arr = [];

for ($i = 0; $i < $num; $i++) {
    $input = readline();
    $tokens = explode(" ", $input);
    $name = $tokens[0];
    $grades = [];
    for ($j = 1; $j < count($tokens); $j++) {
        $grades[] = $tokens[$j];
    }
    $sum = array_sum($grades);
    $average = $sum / count($grades);
    $average = sprintf("%0.2f", $average);
    $studentList = new Student($name, $grades, $average);
    array_push($arr, $studentList);
}

usort($arr, function (Student $a, Student $b) use ($arr) {
    $name1 = $a->getName();
    $name2 = $b->getName();
    $avg1 = $a->getAverage();
    $avg2 = $b->getAverage();
    if ($name1 === $name2) {
        return $avg2 <=> $avg1;
    }
    return $name1 <=> $name2;
});

foreach ($arr as $key) {
    if ($key->getAverage() >= 5.00) {
        echo $key->getName() . " -> " . $key->getAverage() . PHP_EOL;
    }
}