<?php
$inputNum = intval(readline());
$message = "";

for ($i = 0; $i < $inputNum; $i++) {
    $number = intval(readline());
    $digitLen = strlen($number);
    $mainDigit = substr($number, 0, 1);
    $offset = ($mainDigit - 2) * 3;

    if ($mainDigit == 8 || $mainDigit == 9) {
        $offset = ($mainDigit - 2) * 3 + 1;
    }
    $letterIndex = ($offset + $digitLen - 1);
    $letter = chr($letterIndex + 97);

    if ($mainDigit == 0) {
        $letter = chr($mainDigit + 32);
    }
    $message .= $letter;
}
echo $message;
