<?php
$elements = array_map('intval', explode(" ", readline()));
$elementsRemoved = [];
$sum = 0;

while (count($elements) > 0) {
    $index = intval(readline());
    $currentValue = 0;

    if ($index < 0) {
        $currentValue = $elements[0];
        $elements[0] = $elements[count($elements) - 1];
        $elementsRemoved[] = $currentValue;
    } elseif ($index > count($elements) - 1) {
        $currentValue = $elements[count($elements) - 1];
        $elements[count($elements) - 1] = $elements[0];
        $elementsRemoved[] = $currentValue;
    } else {
        $currentValue = $elements[$index];
        array_splice($elements, $index, 1);
        $elementsRemoved[] = $currentValue;
    }

    for ($i = 0; $i < count($elements); $i++) {
        if ($elements[$i] <= $currentValue) {
            $elements[$i] += $currentValue;
        } else {
            $elements[$i] -= $currentValue;
        }
    }
}

foreach ($elementsRemoved as $value) {
    $sum += $value;
}
echo $sum;
