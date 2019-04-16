<?php
$words = explode(", ", readline());

foreach ($words as $word) {
    if (validateWord($word)) {
        echo $word . PHP_EOL;
    }
}

function validateWord(string $word)
{
    if (strlen($word) < 3 || strlen($word) > 16) {
        return false;
    }

    for ($i = 0; $i < strlen($word); $i++) {
        if (!ctype_alnum($word[$i])
            && $word[$i] != "-"
            && $word[$i] != "_") {
            return false;
        }
    }
    return true;
}