<?php
$numbers = array_map('intval', explode(" ", readline()));

while (($line = readline()) != "end") {
    $tokens = explode(" ", $line);

    switch ($tokens[0]) {
        case "Add":
            $numbers[] = add($numbers, intval($tokens[1]));
            break;
        case "Remove":
            $numbers = remove($numbers, intval($tokens[1]));
            break;
        case "RemoveAt":
            $numbers = removeAt($numbers, intval($tokens[1]));
            break;
        case "Insert":
            $numbers = insert($numbers, intval($tokens[1]), intval($tokens[2]));
            break;
        case "Contains":
            contains($numbers, intval($tokens[1]));
            break;
        case "Print":
            printNumbers($numbers, $tokens[1]);
            break;
        case "Get":
            getSumOfNumbers($numbers, $tokens[1]);
            break;
        case "Filter":
            filterArrayByCriteria($numbers, $tokens[1], $tokens[2]);
            break;
    }
}
echo implode(" ", $numbers);

function add($numbers, $numToAdd)
{
    return $numbers[] = $numToAdd;
}

function remove($numbers, $numToRemove)
{
    $index = array_search($numToRemove, $numbers);
    unset($numbers[$index]);
    return $numbers;
}

function removeAt($numbers, $indexToRemove)
{
    array_splice($numbers, $indexToRemove, 1);
    return $numbers;
}

function insert($numbers, $numToInsert, $indexToInsert)
{
    array_splice($numbers, $indexToInsert, 0, $numToInsert);
    return $numbers;
}

function contains(array $numbers, int $numToSearch) : void
{
    if (in_array($numToSearch, $numbers)) {
        echo "Yes" . PHP_EOL;
    } else {
        echo "No such number" . PHP_EOL;
    }
}

function printNumbers(array $numbers, string $type) : void
{
    $isEvenOrOdd = $type == "even" ? 0 : 1;
    $result = [];

    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] % 2 == $isEvenOrOdd) {
            $result[] = $numbers[$i];
        }
    }
    echo implode(" ", $result) . PHP_EOL;
}

function getSumOfNumbers(array $numbers, string $type)
{
    $sum = $type == "sum" ? array_sum($numbers) : 0;
    echo $sum . PHP_EOL;
}

function filterArrayByCriteria(array $numbers,
                               string $condition,
                               int $number) : void
{
    $result = [];

    for ($i = 0; $i < count($numbers); $i++) {
        if ($condition == "<") {
            if ($numbers[$i] < $number) {
                $result[] = $numbers[$i];
            }
        } elseif ($condition == ">") {
            if ($numbers[$i] > $number) {
                $result[] = $numbers[$i];
            }
        } elseif ($condition == "<=") {
            if ($numbers[$i] <= $number) {
                $result[] = $numbers[$i];
            }
        } elseif ($condition == ">=") {
            if ($numbers[$i] >= $number) {
                $result[] = $numbers[$i];
            }
        }
    }
    echo implode(" ", $result) . PHP_EOL;
}
