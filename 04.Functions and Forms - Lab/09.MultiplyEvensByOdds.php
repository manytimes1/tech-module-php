<?php
$number = intval(readline());
echo getMultipleOfEvensAndOdds(abs($number));

function getMultipleOfEvensAndOdds($n)
{
    $evenSum = getSumOfEvenDigits($n);
    $oddSum = getSumOfOddDigits($n);
    return $evenSum * $oddSum;
}

function getSumOfEvenDigits($n)
{
    $evenSum = 0;
    $n = array_map('intval', str_split($n));

    for ($i = 0; $i < count($n); $i++) {
        if ($n[$i] % 2 == 0) {
            $evenSum += $n[$i];
        }
    }
    return $evenSum;
}

function getSumOfOddDigits($n)
{
    $oddSum = 0;
    $n = array_map('intval', str_split($n));

    for ($i = 0; $i < count($n); $i++) {
        if ($n[$i] % 2 != 0) {
            $oddSum += $n[$i];
        }
    }
    return $oddSum;
}
