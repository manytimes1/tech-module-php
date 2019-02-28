<?php
$number = intval(readline());

for ($i = 1; $i <= $number; $i++) {
    if (isDivisibleByEight($i) && hasOddDigit($i)) {
        echo $i . PHP_EOL;
    }
}

function isDivisibleByEight(int $number)
{
    $sumOfDigits = 0;
    $digits = str_split($number);

    for ($i = 0; $i < count($digits); $i++) {
        $sumOfDigits += $digits[$i];
    }

    if ($sumOfDigits % 8 == 0) {
        return true;
    }
    return false;
}

function hasOddDigit(int $number)
{
    $digits = str_split($number);

    for ($i = 0; $i < count($digits); $i++) {
        if ($digits[$i] % 2 != 0) {
            return true;
        }
    }
    return false;
}
