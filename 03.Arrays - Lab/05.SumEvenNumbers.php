<?php
$numbers = array_map('intval', explode(" ", readline()));
$evenSum = 0;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        $evenSum += $numbers[$i];
    }
}
echo $evenSum;
