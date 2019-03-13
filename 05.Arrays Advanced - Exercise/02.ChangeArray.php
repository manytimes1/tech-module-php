<?php
$numbers = array_map('intval', explode(" ", readline()));
$line = readline();
printOddAndEven($numbers, $line);

while (true) {
    if ($line == "Odd" || $line == "Even") {
        break;
    }
    $tokens = explode(" ", $line);

    switch ($tokens[0]) {
        case "Delete":
            $numbers = deleteElementsInArray($numbers, intval($tokens[1]));
            break;
        case "Insert":
            $numbers = insertElements($numbers, intval($tokens[1]), intval($tokens[2]));
            break;
    }
    $line = readline();
}

function deleteElementsInArray(array $numbers, int $element)
{
    foreach (array_keys($numbers, $element) as $key) {
        unset($numbers[$key]);
    }
    $numbers = array_values($numbers);
    return $numbers;
}

function insertElements(array $numbers,
                        int $element,
                        int $position)
{
    if ($position >= 0 && $position <= count($numbers)) {
        array_splice($numbers, $position, 0, $element);
    }
    return $numbers;
}

function printOddAndEven(array $numbers, string $type) {
    $result = [];
    $isOddOrEven = $type == "Odd" ? 1 : 0;

    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] % 2 == $isOddOrEven) {
            $result[] = $numbers[$i];
        }
    }
    echo implode(" ", $result);
}
