<?php
$n = intval(readline());
printf("%s", $factorial($n));

$factorial = function ($n) {
    $factorial = 1;

    for ($i = 1; $i <= $n; $i++) {
        $factorial = bcmul($factorial, $i);
    }
    return $factorial;
};
