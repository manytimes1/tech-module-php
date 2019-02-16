<?php
$numbers = array_map('doubleval', explode(" ", readline()));

foreach ($numbers as $number) {
    $rounded = (int)round($number);
    echo sprintf("%.2f => %d", $number, $rounded) . PHP_EOL;
}
