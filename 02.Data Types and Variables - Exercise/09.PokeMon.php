<?php
$pokePower = intval(readline());
$targetsDistance = intval(readline());
$exhaustionFactor = intval(readline());
$halfPower = $pokePower * 0.5;
$targetsCount = 0;

while ($pokePower >= $targetsDistance) {
    $pokePower -= $targetsDistance;
    $targetsCount++;

    if ($pokePower == $halfPower && $exhaustionFactor > 0) {
        $pokePower /= $exhaustionFactor;
    }
}
echo (int)$pokePower . PHP_EOL;
echo $targetsCount;
