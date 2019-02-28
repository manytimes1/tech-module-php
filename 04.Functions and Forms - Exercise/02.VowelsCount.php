<?php
$input = strtolower(readline());
$count = 0;

for ($i = 0; $i < strlen($input); $i++) {
    if (isVowel(substr($input[$i], -1))) {
        $count++;
    }
}
printf("%d", $count);

function isVowel($symbol)
{
    switch ($symbol) {
        case "a":
        case "e":
        case "o":
        case "i":
        case "u":
        case "y":
            return true;
    }
    return false;
}
