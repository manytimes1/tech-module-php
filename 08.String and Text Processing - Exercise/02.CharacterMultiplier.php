<?php
list($firstWord, $secondWord) = explode(" ", readline());
echo multiplyCharacters($firstWord, $secondWord);

function multiplyCharacters($first, $second)
{
    $minLength = min(strlen($first), strlen($second));
    $sum = 0;

    for ($i = 0; $i < $minLength; $i++) {
        $sum += ord($first[$i]) * ord($second[$i]);
    }

    $maxLength = strlen($first) < strlen($second) ? $second : $first;

    for ($i = $minLength; $i < strlen($maxLength); $i++) {
        $sum += ord($maxLength[$i]);
    }
    return $sum;
}
