<?php
$number = intval(readline());
$products = [];

for ($i = 0; $i < $number; $i++) {
    $products[$i] = readline();
}
sort($products);
$i = 1;

foreach ($products as $product) {
    echo "$i.$product" . PHP_EOL;
    $i++;
}