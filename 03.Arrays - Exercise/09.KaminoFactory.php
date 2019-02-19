<?php
$lengthDna = intval(readline());
$input = readline();
$bestSequenceIndex = 0;
$bestSequenceSum = 0;
$sequence = [];
$bestIndex = 0;
$bestSequenceLength = 0;
$sequenceCount = 0;

while ($input != "Clone them!") {
    $sequenceDNA = array_map('intval',
        preg_split("/(!++)/", $input, -1, PREG_SPLIT_NO_EMPTY));
    $startIndex = 0;
    $currentLength = 1;
    $bestLength = 1;

    for ($i = 0; $i < count($sequenceDNA) - 1; $i++) {
        if ($sequenceDNA[$i] == 1 && $sequenceDNA[$i + 1] == 1) {
            $currentLength++;
            if ($i == count($sequenceDNA) - 2 && $currentLength > $bestLength) {
                $bestLength = $currentLength;
                $startIndex = $i - $currentLength + 2;
            }
        } elseif ($currentLength > $bestLength) {
            $bestLength = $currentLength;
            $startIndex = $i - $bestLength + 1;
            $currentLength = 1;
        } else {
            $currentLength = 1;
        }
    }
    $sum = array_sum($sequenceDNA);
    $sequenceCount++;

    if ($bestLength > $bestSequenceLength) {
        $bestSequenceLength = $bestLength;
        $bestIndex = $startIndex;
        $bestSequenceSum = $sum;
        $bestSequenceIndex = $sequenceCount;
        $sequence = $sequenceDNA;
    } elseif ($startIndex < $bestIndex) {
        $bestSequenceLength = $bestLength;
        $bestIndex = $startIndex;
        $bestSequenceSum = $sum;
        $bestSequenceIndex = $sequenceCount;
        $sequence = $sequenceDNA;
    } elseif ($sum > $bestSequenceSum) {
        $bestSequenceLength = $bestLength;
        $bestIndex = $startIndex;
        $bestSequenceSum = $sum;
        $bestSequenceIndex = $sequenceCount;
        $sequence = $sequenceDNA;
    }
    $input = readline();
}
printf("Best DNA sample %d with sum: %d." . PHP_EOL, $bestSequenceIndex, $bestSequenceSum);
echo implode(" ", $sequence);