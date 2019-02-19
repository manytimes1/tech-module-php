<?php
$numbers = array_map('intval', explode(" ", readline()));

for ($i = 0; $i < count($numbers); $i++) {
    $isGreater = true;

    for ($j = $i + 1; $j < count($numbers); $j++) {
        if ($numbers[$i] <= $numbers[$j]) {
            $isGreater = false;
            break;
        }
    }
    if ($isGreater) {
        echo $numbers[$i] . " ";
    }
}
