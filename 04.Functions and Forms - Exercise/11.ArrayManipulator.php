<?php
$numbers = array_map('intval', explode(" ", readline()));

while (($input = readline()) != "end") {
    $tokens = explode(" ", $input);

    switch ($tokens[0]) {
        case "exchange":
            if (intval($tokens[1]) < 0 || intval($tokens[1]) >= count($numbers)) {
                echo "Invalid index" . PHP_EOL;
            } else {
                $numbers = exchangeArray($numbers, intval($tokens[1]));
            }
            break;
        case "max":
            maxElementIndex($numbers, $tokens[1]);
            break;
        case "min":
            minElementIndex($numbers, $tokens[1]);
            break;
        case "first":
            firstCountElements($numbers, intval($tokens[1]), $tokens[2]);
            break;
        case "last":
            lastCountElements($numbers, intval($tokens[1]), $tokens[2]);
            break;
    }
}
echo "[" . implode(", ", $numbers) . "]";

function exchangeArray(array $numbers, int $index)
{
    $result = [];

    for ($i = $index + 1; $i < count($numbers); $i++) {
        $result[] = $numbers[$i];
    }

    for ($i = 0; $i <= $index; $i++) {
        $result[] = $numbers[$i];
    }
    return $result;
}

function maxElementIndex(array $numbers, string $type)
{
    $isEvenOrOdd = $type == "even" ? 0 : 1;
    $maxElement = PHP_INT_MIN;
    $index = -1;

    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] % 2 == $isEvenOrOdd) {
            if ($numbers[$i] >= $maxElement) {
                $maxElement = $numbers[$i];
                $index = $i;
            }
        }
    }

    if ($index == -1) {
        echo "No matches" . PHP_EOL;
    } else {
        echo $index . PHP_EOL;
    }
}

function minElementIndex(array $numbers, string $type)
{
    $isEvenOrOdd = $type == "even" ? 0 : 1;
    $minElement = PHP_INT_MAX;
    $index = -1;

    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] % 2 == $isEvenOrOdd) {
            if ($numbers[$i] <= $minElement) {
                $minElement = $numbers[$i];
                $index = $i;
            }
        }
    }

    if ($index == -1) {
        echo "No matches" . PHP_EOL;
    } else {
        echo $index . PHP_EOL;
    }
}

function firstCountElements(array $numbers, int $count, string $type)
{
    if ($count < 0 || $count > count($numbers)) {
        echo "Invalid count" . PHP_EOL;
        return;
    }
    $isEvenOrOdd = $type == "even" ? 0 : 1;
    $result = [];
    $index = 0;

    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] % 2 == $isEvenOrOdd) {
            if ($index == $count) {
                break;
            }
            $result[] = $numbers[$i];
            $index++;
        }
    }

    if (count($result) == 0) {
        echo "[]" . PHP_EOL;
    } else {
        echo "[" . implode(", ", $result) . "]" . PHP_EOL;
    }
}

function lastCountElements(array $numbers, int $count, string $type)
{
    // code duplicate ... can moved to method itself
    if ($count < 0 || $count > count($numbers)) {
        echo "Invalid count" . PHP_EOL;
        return;
    }
    $isEvenOrOdd = $type == "even" ? 0 : 1;
    $result = [];
    $index = 0;

    for ($i = count($numbers) - 1; $i >= 0; $i--) {
        if ($numbers[$i] % 2 == $isEvenOrOdd) {
            if ($index == $count) {
                break;
            }
            $result[] = $numbers[$i];
            $index++;
        }
    }

    if (count($result) == 0) {
        echo "[]" . PHP_EOL;
    } else {
        echo "[" . implode(", ", array_reverse($result)) . "]" . PHP_EOL;
    }
}
