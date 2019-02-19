<?php
$fieldSize = intval(readline());
$initialIndexes = array_map('intval', explode(" ", readline()));
$field = [];

for ($i = 0; $i < $fieldSize; $i++) {
    if (in_array($i, $initialIndexes)) {
        $field[$i] = 1;
    } else {
        $field[$i] = 0;
    }
}

while (($command = readline()) !== "end") {
    $list = explode(" ", $command);
    $index = intval($list[0]);
    $direction = $list[1] === "left" ? -1 : 1;
    $flyLength = intval($list[2]) * $direction;

    if ($index < 0 || $index >= $fieldSize || !$field[$index]) {
        continue;
    }
    $field[$index] = 0;

    while (($index += $flyLength) >= 0 && $index < $fieldSize) {
        if ($field[$index]) {
            continue;
        }
        $field[$index] = 1;
        break;
    }
}
echo implode(" ", $field);
