<?php
$products = [];
$prices = [];

while (($input = readline()) != "buy") {
    $data = explode(" ", $input);
    list($name, $price, $quantity) = $data;

    if (!key_exists($name, $products)) {
        $products[$name] = $price;
        $prices[$name] = $quantity;
    } else {
        $products[$name] = $price;
        $prices[$name] += $quantity;
    }
}

foreach ($products as $product => $value) {
    $totalPrice = $value * $prices[$product];
    printf("%s -> %.2f" . PHP_EOL, $product, $totalPrice);
}