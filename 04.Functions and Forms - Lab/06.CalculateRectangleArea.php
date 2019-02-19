<?php
$width = doubleval(readline());
$length = doubleval(readline());
echo calculateRectangleArea($width, $length);

function calculateRectangleArea($width, $length) : float
{
    $area = $width * $length;
    return $area;
}