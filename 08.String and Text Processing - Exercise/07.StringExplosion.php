<?php
$input = readline();
echo stringExplosion($input);

function stringExplosion($string)
{
    $lastPower = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] === ">") {
            $lastPower += $string[$i + 1];
            continue;
        }

        if ($lastPower > 0) {
            $string = substr_replace($string, "", $i, 1);
            $i--;
            $lastPower--;
        }
    }
    return $string;
}
