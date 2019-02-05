<?php
$lostGames = intval(readline());
$headsetPrice = doubleval(readline());
$mousePrice = doubleval(readline());
$keyboardPrice = doubleval(readline());
$displayPrice = doubleval(readline());

$headsetCount = 0;
$mouseCount = 0;
$keyboardCount = 0;
$displayCount = 0;

for ($i = 1; $i <= $lostGames; $i++) {
    if ($i % 2 == 0) {
        $headsetCount++;
    }

    if ($i % 3 == 0) {
        $mouseCount++;
    }

    if ($i % 2 == 0 && $i % 3 == 0) {
        $keyboardCount++;

        if ($keyboardCount % 2 == 0) {
            $displayCount++;
        }
    }
}

$rageExpense = ($headsetPrice * $headsetCount) + ($mousePrice * $mouseCount) +
    ($keyboardPrice * $keyboardCount) + ($displayPrice * $displayCount);

printf("Rage expenses: %.2f lv.", $rageExpense);
