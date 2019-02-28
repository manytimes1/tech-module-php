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
            $numToInsert = intval($tokens[1]);
            $indexToInsert = intval($tokens[2]);
            $numbers = insert($numbers, $numToInsert, $indexToInsert);
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