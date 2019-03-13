<?php
$elements = preg_split("/\s+/", readline(), -1, PREG_SPLIT_NO_EMPTY);

while (($command = readline()) != "3:1") {
    $tokens = preg_split("/\s+/", $command, -1, PREG_SPLIT_NO_EMPTY);

    switch ($tokens[0]) {
        case "merge":
            $startIndex = isValidIndex(intval($tokens[1]), $elements);
            $endIndex = isValidIndex(intval($tokens[2]), $elements);
            $concatSymbol = "";

            for ($i = $startIndex; $i <= $endIndex; $i++) {
                $concatSymbol .= $elements[$i];
            }
            array_splice($elements, $startIndex, $endIndex - $startIndex + 1);
            array_splice($elements, $startIndex, 0, $concatSymbol);
            break;
        case "divide":
            $index = intval($tokens[1]);
            $partitions = intval($tokens[2]);
            $result = isDividedEqual($elements[$index], $partitions);
            array_splice($elements, $index, 1);
            array_splice($elements, $index, 0, $result);
            break;
    }
}
echo implode(" ", $elements);

function isDividedEqual(string $arrayIndex, int $partitions)
{
    $result = [];
    $part = floor(strlen($arrayIndex) / $partitions);

    if (strlen($arrayIndex) % $partitions == 0) {
        $result = str_split($arrayIndex, $part);
        return $result;
    } else {
        $lastTwoElementsLength = $part + strlen($arrayIndex) % $partitions;
        $lastPart = substr($arrayIndex, (-$lastTwoElementsLength));
        $arrayIndex = substr_replace($arrayIndex, "", (-$lastTwoElementsLength));
        $result = str_split($arrayIndex, $part);
        $result[] = $lastPart;
        return $result;
    }
}

function isValidIndex(int $index, array $arrayLength)
{
    if ($index < 0) {
        $index = 0;
    }

    if ($index > count($arrayLength) - 1) {
        $index = count($arrayLength) - 1;
    }
    return $index;
}
