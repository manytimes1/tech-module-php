<?php
$number = intval(readline());
$times = intval(readline());

do {
    $result = $number * $times;
    echo "$number X $times = $result" . PHP_EOL;
    $times++;
} while ($times <= 10);
