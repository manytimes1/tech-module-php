<?php
$number = intval(readline());
printNumber($number);

function printNumber(int $number)
{
    if ($number > 0) {
        printf("The number %d is positive.", $number);
    } elseif ($number < 0) {
        printf("The number %d is negative.", $number);
    } else {
        printf("The number %d is zero.", $number);
    }
}
