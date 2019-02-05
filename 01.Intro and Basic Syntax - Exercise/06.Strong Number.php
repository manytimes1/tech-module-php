<?php
$number = intval(readline());
$n = str_split($number);
$sum = 0;

for ($i = 0; $i < count($n); $i++) {
    $currentSum = 1;

    for ($j = 1; $j <= $n[$i]; $j++) {
        $currentSum *= $j;
    }
    $sum += $currentSum;
}

if ($sum === $number) {
    echo "yes";
} else {
    echo "no";
}
