<?php
$collection = [];

while (($input = readline()) != "stop") {
    if (!key_exists($input, $collection)) {
        $collection[$input] = 0;
    }
    $carats = intval(readline());
    $collection[$input] += $carats;
}

foreach ($collection as $type => $value) {
    echo "$type -> {$value}K" . PHP_EOL;
}
