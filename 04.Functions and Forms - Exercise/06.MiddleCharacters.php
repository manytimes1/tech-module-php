<?php
$inputString = readline();
echo printMiddleCharacter($inputString);

function printMiddleCharacter($string)
{
    $result = "";

    if (strlen($string) % 2 == 1) {
        $index = intval(strlen($string) / 2);
        $result .= $string[$index];
    } else {
        $index = intval(strlen($string) / 2);
        $result .= $string[$index - 1] . $string[$index];
    }
    return $result;
}
