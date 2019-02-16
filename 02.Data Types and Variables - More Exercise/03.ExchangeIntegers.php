<?php
$a = intval(readline());
$b = intval(readline());
echo "Before: \n" . "a = $a \n" . "b = $b \n";

$temp = $a;
$a = $b;
$b = $temp;
echo "After: \n" . "a = $a \n" . "b = $b";
