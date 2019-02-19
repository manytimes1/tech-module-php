<?php
$string = readline();
$count = intval(readline());
echo strRepeat($string, $count);

function strRepeat($input, $multiplier)
{
    $return = str_repeat($input, $multiplier);
    return $return;
}