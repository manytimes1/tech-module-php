<?php
$lines = intval(readline());

for ($i = 0; $i < $lines; $i++) {
    $numbers = explode(" ", readline());
    $sumOfDigits = 0;
    $leftNum = $numbers[0];
    $rightNum = $numbers[1];

    if ($leftNum > $rightNum) {
        for ($j = 0; $j < strlen($leftNum); $j++) {
            @$sumOfDigits += $leftNum[$j];
        }
    } elseif ($rightNum >= $leftNum) {
        for ($k = 0; $k < strlen($rightNum); $k++) {
            @$sumOfDigits += $rightNum[$k];
        }
    }
    echo abs($sumOfDigits) . PHP_EOL;
}
