<?php
$numbers = array_map('intval', explode(" ", readline()));

while (($line = readline()) != "end") {
    $tokens = str_split($line);
    array_splice($numbers, intval($tokens[0]), 0, intval($line));
}
echo implode(" ", $numbers);
