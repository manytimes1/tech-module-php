<?php
$numbers = array_map('intval', explode(" ", readline()));

while (($command = readline()) != "End") {
    $tokens = explode(" ", $command);

    switch ($tokens[0]) {
        case "Add":
            array_push($numbers, $tokens[1]);
            break;
        case "Insert":
            $numberToInsert = intval($tokens[1]);
            $index = intval($tokens[2]);

            if (isInRange($numbers, $index)) {
                array_splice($numbers, $index, 0, $numberToInsert);
            } else {
                echo "Invalid index" . PHP_EOL;
            }
            break;
        case "Remove":
            $index = intval($tokens[1]);

            if (isInRange($numbers, $index)) {
                array_splice($numbers, $index, 1);
            } else {
                echo "Invalid index" . PHP_EOL;
            }
            break;
        case "Shift":
            $direction = $tokens[1];
            $count = intval($tokens[2]);

            if ($direction == "left") {
                for ($i = 0; $i < $count % count($numbers); $i++) {
                    array_push($numbers, array_shift($numbers));
                }
            } elseif ($direction == "right") {
                for ($i = 0; $i < $count % count($numbers); $i++) {
                    $current = $numbers[count($numbers) - 1];
                    array_pop($numbers);
                    array_unshift($numbers, $current);
                }
            }
            break;
    }
}
echo implode(" ", $numbers);

function isInRange(array $numbers, int $index)
{
    if ($index >= 0 && $index < count($numbers)) {
        return true;
    }
    return false;
}
