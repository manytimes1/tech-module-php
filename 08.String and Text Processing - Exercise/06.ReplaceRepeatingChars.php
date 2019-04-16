<?php
$char = readline();
$replacedChar = replaceRepeatingChars($char);
echo $replacedChar;

function replaceRepeatingChars(string $char)
{
    for ($i = 0; $i < strlen($char) - 1; $i++) {
        if ($char[$i] === $char[$i + 1]) {
            $char = substr_replace($char, "", $i, 1);
            $i--;
        }
    }
    return $char;
}
