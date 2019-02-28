<?php
$firstNumber = intval(readline());
$secondNumber = intval(readline());
echo calculateFactorial($firstNumber, $secondNumber);

function calculateFactorial(int $firstNumber, int $secondNumber)
{
    $firstFactorial = 1;
    $secondFactorial = 1;

    for ($i = 0; $i < $firstNumber; $i++) {
        $firstFactorial *= ($i + 1);
    }

    for ($i = 0; $i < $secondNumber; $i++) {
        $secondFactorial *= ($i + 1);
    }

    return sprintf("%.2f", $firstFactorial / $secondFactorial);
}
