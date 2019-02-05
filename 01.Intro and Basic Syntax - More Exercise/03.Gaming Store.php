<?php
$balance = doubleval(readline());
$gameName = readline();
$currentBalance = $balance;
$price = 0;
$isValidGame = false;

while ($gameName != "Game Time") {
    for ($i = 0; $i < count(availableGames()); $i++) {
        if ($gameName == availableGames()[$i]) {
            $price = gamePrices()[$i];

            if ($currentBalance >= $price) {
                $currentGame = availableGames()[$i];
                echo "Bought $currentGame" . PHP_EOL;
                $currentBalance -= gamePrices()[$i];
            } else {
                echo "Too Expensive" . PHP_EOL;
            }
            $isValidGame = true;

            if ($currentBalance == 0) {
                echo "Out of money!";
                return;
            }
        } elseif (!$isValidGame && ($i == count(availableGames()) - 1)) {
            echo "Not Found" . PHP_EOL;
        }
    }
    $gameName = readline();
}

if ($currentBalance > 0) {
    printf("Total spent: $%.2f. Remaining: $%.2f",
        ($balance - $currentBalance), $currentBalance);
}

function availableGames()
{
    $games = [
        "OutFall 4",
        "CS: OG",
        "Zplinter Zell",
        "Honored 2",
        "RoverWatch",
        "RoverWatch Origins Edition"
    ];
    return $games;
}

function gamePrices()
{
    $prices = [
        39.99,
        15.99,
        19.99,
        59.99,
        29.99,
        39.99
    ];
    return $prices;
}
