<?php
$firstInput = readline();
$secondInput = readline();
echo charactersInRange($firstInput, $secondInput);

function charactersInRange($firstChar, $secondChar)
{
    $result = "";
    $firstOutput = ord($firstChar); // C => 67
    $secondOutput = ord($secondChar); // # => 35

    if ($firstOutput < $secondOutput) {
        for ($i = $firstOutput; $i < $secondOutput - 1; $i++) {
            $result .= chr($i + 1) . " ";
        }
    } else {
        for ($i = $secondOutput; $i < $firstOutput - 1; $i++) {
            $result .= chr($i + 1) . " ";
        }
    }
    return $result;
}
