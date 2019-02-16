<?php
$numberOfBalls = intval(readline());
$bestSnowballSnow = 0;
$bestSnowballTime = 0;
$bestSnowballQuality = 0;
$bestSnowballValue = 0;

for ($i = 0; $i < $numberOfBalls; $i++) {
    $snowballSnow = intval(readline());
    $snowballTime = intval(readline());
    $snowballQuality = intval(readline());
    $snowballValue = bcpow($snowballSnow / $snowballTime, $snowballQuality);

    if ($snowballValue >= $bestSnowballValue) {
        $bestSnowballValue = $snowballValue;
        $bestSnowballSnow = $snowballSnow;
        $bestSnowballTime = $snowballTime;
        $bestSnowballQuality = $snowballQuality;
    }
}
echo "$bestSnowballSnow : $bestSnowballTime = $bestSnowballValue ($bestSnowballQuality)";
