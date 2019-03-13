<?php
// 80 pts in judge
$sequence = array_map('intval', explode(" ", readline()));
$input = array_map('intval', explode(" ", readline()));

$bombNumber = $input[0];
$power = $input[1];

for ($i = 0; $i < count($sequence); $i++) {
    if ($sequence[$i] == $bombNumber) {
        $left = max($i - $power, 0);
        $right = min($i + $power, count($sequence) - 1);
        $length = $right - $left + 1;
        array_splice($sequence, $left, $length);
    }
}
$sum = array_sum($sequence);
echo $sum;
