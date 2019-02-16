<?php
$numbers = array_map('intval', explode(" ", readline()));
$evenSum = 0;
$oddSum = 0;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $evenSum += $number;
    } else {
        $oddSum += $number;
    }
}
$diff = $evenSum - $oddSum;
echo $diff;
