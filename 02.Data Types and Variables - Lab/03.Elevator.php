<?php
$peopleNumber = intval(readline());
$elevatorCapacity = intval(readline());
$courses = 0;

while ($peopleNumber > 0) {
    $peopleNumber -= $elevatorCapacity;
    $courses++;
}
echo $courses;
