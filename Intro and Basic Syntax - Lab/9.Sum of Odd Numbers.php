<?php
$n = intval(readline());
$sum = 0;

for ($i = 1; $i <= $n; $i++) {
    $result = 2 * $i - 1;
    echo $result . PHP_EOL;
    $sum += $result;
}

echo "Sum: $sum";
