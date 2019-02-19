<?php
$input = intval(readline());
printTriangle($input);

function printLine(int $start, int $end)
{
    for ($i = $start; $i <= $end; $i++) {
        echo "$i ";
    }
    echo PHP_EOL;
}

function printTriangle(int $n)
{
    for ($i = 1; $i <= $n; $i++) {
        printLine(1, $i);
    }

    for ($i = $n - 1; $i >= 1; $i--) {
        printLine(1, $i);
    }
}