<?php
$number = intval(readline());
$times = 1;

while ($times <= 10) {
    $result = $number * $times;
    echo "$number X $times = $result" . PHP_EOL;
    $times++;
}
