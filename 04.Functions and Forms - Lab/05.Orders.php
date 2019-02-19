<?php
$product = strtolower(readline());
$quantity = intval(readline());
priceCalculate($product, $quantity);

function priceCalculate(string $product, int $quantity)
{
    switch ($product) {
        case "coffee":
            printf("%.2f", ($quantity * 1.50));
            break;
        case "water":
            printf("%.2f", ($quantity * 1.00));
            break;
        case "coke":
            printf("%.2f", ($quantity * 1.40));
            break;
        case "snacks":
            printf("%.2f", ($quantity * 2.00));
            break;
        default:
            break;
    }
}
