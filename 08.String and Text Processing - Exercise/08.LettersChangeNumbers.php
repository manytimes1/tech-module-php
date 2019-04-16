<?php
$words = preg_split("/\s+/", readline(), -1, PREG_SPLIT_NO_EMPTY);
$sum = 0;

foreach ($words as $word) {
    $symbolBeforeNum = $word[0];
    $firstSymbolPosition = ord(strtoupper($symbolBeforeNum)) - ord('A') + 1;
    $symbolAfterNum = $word[strlen($word) - 1];
    $lastSymbolPosition = ord(strtoupper($symbolAfterNum)) - ord('A') + 1;
    $number = substr($word, 1, strlen($word) - 2);

    if (ctype_upper($symbolBeforeNum)) {
        $number /= $firstSymbolPosition;
    } else {
        $number *= $firstSymbolPosition;
    }

    if (ctype_upper($symbolAfterNum)) {
        $number -= $lastSymbolPosition;
    } else {
        $number += $lastSymbolPosition;
    }
    $sum += $number;
}
printf("%.2f", $sum);
