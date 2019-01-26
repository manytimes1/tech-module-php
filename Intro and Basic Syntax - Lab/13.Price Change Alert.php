<?php
$n = intval(readline());
$significance = doubleval(readline());
$last = doubleval(readline());

for ($i = 0; $i < $n - 1; $i++) {
    $price = doubleval(readline());
    $div = ($price - $last) / $last;
    $isDifference = abs($div) >= $significance;

    if ($div == 0) {
        echo "NO CHANGE: $price" . PHP_EOL;
        continue;
    }
    $to = "";

    if (!$isDifference) {
        $to = "MINOR CHANGE:";
    } else {
        if ($div > 0) {
            $to = "PRICE UP:";
        } else {
            $to = "PRICE DOWN:";
        }
    }
    printf("$to %f to %f (%.2f%%)"
        . PHP_EOL, $last, $price, $div * 100);
    $last = $price;
}
