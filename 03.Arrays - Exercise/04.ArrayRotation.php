<?php
$numbers = explode(" ", readline());
$rotations = intval(readline());

for ($i = 0; $i < $rotations % count($numbers); $i++) {
    $firstElement = $numbers[0];

    for ($j = 0; $j < count($numbers) - 1; $j++) {
        $numbers[$j] = $numbers[$j + 1];
    }
    $numbers[count($numbers) - 1] = $firstElement;
}
echo implode(" ", $numbers);
