<?php
$start = intval(readline());
$end = intval(readline());
$sum = 0;

for ($i = $start; $i <= $end; $i++) {
    echo "$i ";
    $sum += $i;
}

echo PHP_EOL;
echo "Sum: $sum";
