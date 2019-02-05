<?php
$number = intval(readline());

for ($i = 1; $i <= $number; $i++) {
    $sumOfDigits = 0;
    $digits = $i;

    while ($digits > 0) {
        $sumOfDigits += $digits % 10;
        $digits /= 10;
    }
    if ($sumOfDigits == 5 || $sumOfDigits == 7) {
        echo "$i -> True" . PHP_EOL;
    } else {
        echo "$i -> False" . PHP_EOL;
    }
}
