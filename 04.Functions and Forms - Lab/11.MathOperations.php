<?php
$firstNumber = intval(readline());
$operator = readline();
$secondNumber = intval(readline());
$result = calculate($firstNumber, $operator, $secondNumber);
printf("%.2f", $result);

function calculate($firstNumber, $operator, $secondNumber)
{
    $result = 0;

    switch ($operator) {
        case "+":
            $result = $firstNumber + $secondNumber;
            break;
        case "-":
            $result = $firstNumber - $secondNumber;
            break;
        case "*":
            $result = $firstNumber * $secondNumber;
            break;
        case "/":
            $result = $firstNumber / $secondNumber;
            break;
        default:
            break;
    }
    return $result;
}
