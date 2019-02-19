<?php
$number = doubleval(readline());
$power = intval(readline());
echo mathPower($number, $power);

function mathPower($number, $power) : float
{
    $result = pow($number, $power);
    return $result;
}
