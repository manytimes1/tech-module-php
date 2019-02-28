<?php
$firstNumber = intval(readline());
$secondNumber = intval(readline());
$thirdNumber = intval(readline());
echo findSmallestNumber($firstNumber, $secondNumber, $thirdNumber);

function findSmallestNumber($first, $second, $third)
{
    return min($first, $second, $third);
}