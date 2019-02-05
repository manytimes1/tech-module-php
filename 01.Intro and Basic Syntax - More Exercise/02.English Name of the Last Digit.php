<?php
$number = doubleval(readline());

if ($number >= 0) {
    echo getDigitName($number);
}

function getDigitName(string $number)
{
    $key = substr($number, - 1);
    $arr = [
        "zero",
        "one",
        "two",
        "three",
        "four",
        "five",
        "six",
        "seven",
        "eight",
        "nine"
    ];

    return $arr[$key];
}

