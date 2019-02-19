<?php
$n = intval(readline());
$peopleInTrain = [];
$totalPeople = 0;

for ($i = 0; $i < $n; $i++) {
    $peopleInTrain[$i] = intval(readline());
    $totalPeople += $peopleInTrain[$i];
}
echo implode(" ", $peopleInTrain) . PHP_EOL . $totalPeople;
