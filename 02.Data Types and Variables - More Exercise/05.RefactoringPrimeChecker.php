<?php
$number = intval(readline());

for ($i = 2; $i <= $number; $i++) {
    $isPrime = true;

    for ($delimiter = 2; $delimiter < $i; $delimiter++) {
        if ($i % $delimiter == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        printf("%d -> true" . PHP_EOL, $i);
    } else {
        printf("%d -> false" . PHP_EOL, $i);
    }
}
