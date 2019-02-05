<?php
$number = intval(readline());
$current = 0;

if ($number % 10 == 0) {
    $current = 10;
} elseif ($number % 7 == 0) {
    $current = 7;
} elseif ($number % 6 == 0) {
    $current = 6;
} elseif ($number % 3 == 0) {
    $current = 3;
} elseif ($number % 2 == 0) {
    $current = 2;
}

if ($current !== 0) {
    echo "The number is divisible by $current";
} else {
    echo "Not divisible";
}
