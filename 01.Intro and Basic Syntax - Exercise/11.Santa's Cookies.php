<?php
$batches = intval(readline());
$totalBoxes = 0;

for ($i = 1; $i <= $batches; $i++) {
    $flour = intval(readline());
    $sugar = intval(readline());
    $cocoa = intval(readline());
    $flourCups = intval($flour / 140);
    $sugarSpoons = intval($sugar / 20);
    $cocoaSpoons = intval($cocoa / 10);

    if ($flourCups <= 0 || $sugarSpoons <= 0 || $cocoaSpoons <= 0) {
        echo "Ingredients are not enough for a box of cookies." . PHP_EOL;
        continue;
    }

    $minValue = min($flourCups, $sugarSpoons, $cocoaSpoons) / 25;
    $totalCookiesBake = floor((140 + 10 + 20) * $minValue);
    $boxes = floor($totalCookiesBake / 5);
    $totalBoxes += floor($totalCookiesBake / 5);

    echo "Boxes of cookies: $boxes" . PHP_EOL;
}

echo "Total boxes: $totalBoxes";
