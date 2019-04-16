<?php
$line = readline();
$symbol = "";
$multiplier = "";
$result = "";

for ($i = 0; $i < strlen($line); $i++) {
    if (!is_numeric($line[$i])) {
        $symbol .= $line[$i];
        continue;
    } else {
        $multiplier .= $line[$i];

        if (@is_numeric($line[$i + 1])) {
            $multiplier .= $line[$i + 1];
            $i++;
        }
    }

    $result .= str_repeat(strtoupper($symbol), intval($multiplier));
    $symbol = "";
    $multiplier = "";
}
echo "Unique symbols used: "
    . count(array_unique(str_split($result)))
    . PHP_EOL
    . $result;
