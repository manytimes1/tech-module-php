<?php
$number = intval(readline());
echo printMatrix($number);

function printMatrix($number)
{
    $result = null;

    for ($i = 0; $i < $number; $i++) {
       for ($j = 0; $j < $number; $j++) {
           $result .= $number . " ";
       }
       $result .= PHP_EOL;
    }
    return $result;
}
