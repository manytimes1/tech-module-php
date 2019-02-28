<?php
$input = array_map("intval", explode(" ", readline()));
$numbers = [];

for ($i = 0, $j = count($input) - 1; $i < count($input) / 2; $i++, $j--) {
    if (count($input) % 2 == 1) {
        if ($i == intval(count($input) / 2)) {
            $numbers[] = $input[$i];
            break;
        }
        $numbers[] = $input[$i] + $input[$j];
    } elseif (count($input) % 2 == 0) {
        if ($i == count($input) / 2) {
            break;
        }
        $numbers[] = $input[$i] + $input[$j];
    }
}
echo implode(" ", $numbers);
