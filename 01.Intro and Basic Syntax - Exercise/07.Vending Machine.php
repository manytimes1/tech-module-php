<?php
$input = strtolower(readline());
$totalMoney = 0;

while ($input !== "start") {
    $coins = doubleval($input);

    if ($coins == 0.1 || $coins == 0.2 || $coins == 0.5
        || $coins == 1 || $coins == 2) {
        $totalMoney += $coins;
    } else {
        echo "Cannot accept $coins" . PHP_EOL;
    }
    $input = strtolower(readline());
}
$input = strtolower(readline());

while ($input != "end") {
    if ($input == "nuts") {
        if ($totalMoney >= 2) {
            echo "Purchased $input" . PHP_EOL;
            $totalMoney -= 2;
        } else {
            echo "Sorry, not enough money" . PHP_EOL;
        }
    } elseif ($input == "water") {
        if (round($totalMoney) >= 0.7) {
            echo "Purchased $input" . PHP_EOL;
            $totalMoney -= 0.7;
        } else {
            echo "Sorry, not enough money" . PHP_EOL;
        }
    } elseif ($input == "crisps") {
        if (round($totalMoney) >= 1.5) {
            echo "Purchased $input" . PHP_EOL;
            $totalMoney -= 1.5;
        } else {
            echo "Sorry, not enough money" . PHP_EOL;
        }
    } elseif ($input == "soda") {
        if (round($totalMoney) >= 0.8) {
            echo "Purchased $input" . PHP_EOL;
            $totalMoney -= 0.8;
        } else {
            echo "Sorry, not enough money" . PHP_EOL;
        }
    } elseif ($input == "coke") {
        if ($totalMoney >= 1) {
            echo "Purchased $input" . PHP_EOL;
            $totalMoney -= 1;
        } else {
            echo "Sorry, not enough money" . PHP_EOL;
        }
    } else {
        echo "Invalid product" . PHP_EOL;
    }
    $input = strtolower(readline());
}

printf("Change: %.2f", abs($totalMoney));
