<?php
$nums = array_map('intval', explode(" ", readline()));

while (count($nums) > 1) {
    $condensed = array_fill(0, count($nums) - 1, 0);
    for ($i = 0; $i < count($condensed); $i++) {
        $condensed[$i] = $nums[$i] + $nums[$i + 1];
    }
    $nums = $condensed;
}
echo $nums[0];