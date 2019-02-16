<?php
$firstArray = array_map('intval', explode(" ", readline()));
$secondArray = array_map('intval', explode(" ", readline()));
$maxLength = max(count($firstArray), count($secondArray));
$sum = 0;

for ($i = 0; $i < $maxLength; $i++) {
    $sum += $firstArray[$i];

    if ($firstArray[$i] !== $secondArray[$i]) {
        printf("Arrays are not identical. Found difference at %d index.", $i);
        return;
    }
}
printf("Arrays are identical. Sum: %d", $sum);
