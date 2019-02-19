<?php
$input = array_map('intval', explode(" ", readline()));
$finalIndex = [];

for ($i = 0; $i < count($input); $i++) {
    $currentIndex = [];
    for ($j = $i; $j < count($input); $j++) {
        if ($input[$i] === $input[$j]) {
            $currentIndex[] .= $input[$i];
        } else {
            break;
        }
    }

    if (count($finalIndex) < count($currentIndex)) {
        $finalIndex = $currentIndex;
    }
}
echo implode(" ", $finalIndex);
