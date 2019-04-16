<?php
$number = strrev(readline());
$digit = intval(readline());
$residue = 0;
$multiply = 1;

if ($number == "0" || $digit == 0) {
    echo "0";
    return;
}

for ($i = 0; $i < strlen($number); $i++) {
    $firstDigit = intval($number[$i]);
    $multiply = $firstDigit * $digit + $residue;
    $product .= $multiply % 10;
    $residue = intval($multiply / 10);

    if ($i === (strlen($number) - 1) && $residue !== 0) {
        $product .= $residue;
    }
}
echo strrev($product);
