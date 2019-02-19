<?php
$input = array_map('intval', explode(" ", readline()));

for ($i = 0; $i < count($input); $i++) {
    $leftSum = 0;
    $rightSum = 0;

    for ($left = $i - 1; $left >= 0; $left--) {
        $leftSum += $input[$left];
    }

    for ($right = $i + 1; $right < count($input); $right++) {
        $rightSum += $input[$right];
    }

    if ($leftSum == $rightSum) {
        echo $i;
        return;
    }
}
echo "no";
