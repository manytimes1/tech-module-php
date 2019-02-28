<?php
$firstInteger = intval(readline());
$secondInteger = intval(readline());
$thirdInteger = intval(readline());
echo subtract($firstInteger, $secondInteger, $thirdInteger);

function sum(int $firstNumber, int $secondNumber)
{
    return $firstNumber + $secondNumber;
}

function subtract(int $firstNumber,
                  int $secondNumber,
                  int $thirdNumber)
{
    $result = (sum($firstNumber, $secondNumber) - $thirdNumber);
    return $result;
}
