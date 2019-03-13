<?php
$wagons = array_map('intval', explode(" ", readline()));
$maxCapacity = intval(readline());

while (($line = readline()) != "end") {
    $tokens = explode(" ", $line);

    if (count($tokens) == 2) {
        $wagons[] = $tokens[1];
    } else {
        for ($i = 0; $i < count($wagons); $i++) {
            if ($wagons[$i] + $tokens[0] <= $maxCapacity) {
                $wagons[$i] += $tokens[0];
                break;
            }
        }
    }
}
echo implode(" ", $wagons);
