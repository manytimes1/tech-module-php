<?php
$items = array_map('intval', explode(" ", readline()));
$givenNumber = intval(readline());
$sum = [];

for ($i = 0; $i < count($items); $i++) {
    for ($j = $i + 1; $j < count($items); $j++) {
        if ($items[$i] + $items[$j] == $givenNumber) {
            $sum[] .= $items[$i] . " " . $items[$j] . PHP_EOL;
        }
    }
}
echo implode("", $sum);
