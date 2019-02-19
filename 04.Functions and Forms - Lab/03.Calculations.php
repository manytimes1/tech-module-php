<?php
$input = readline();
$firstNumber = intval(readline());
$secondNumber = intval(readline());

switch ($input) {
    case "add":
        add($firstNumber, $secondNumber);
        break;
    case "subtract":
        subtract($firstNumber, $secondNumber);
        break;
    case "multiply":
        multiply($firstNumber, $secondNumber);
        break;
    case "divide":
        divide($firstNumber, $secondNumber);
        break;
    default:
        break;
}

function add(int $firstNumber, int $secondNumber)
{
    $result = $firstNumber + $secondNumber;
    echo $result;
}

function subtract(int $firstNumber, int $secondNumber)
{
    $result = $firstNumber - $secondNumber;
    echo $result;
}

function multiply(int $firstNumber, int $secondNumber)
{
    $result = $firstNumber * $secondNumber;
    echo $result;
}

function divide(int $firstNumber, int $secondNumber)
{
    $result = $firstNumber / $secondNumber;
    echo $result;
}