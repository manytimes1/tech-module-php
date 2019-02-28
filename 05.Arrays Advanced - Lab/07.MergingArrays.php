<?php
$firstArray = array_map('intval', explode(" ", readline()));
$secondArray = array_map('intval', explode(" ", readline()));

for ($i = 0; $i < min(count($firstArray), count($secondArray)); $i++) {
    echo $firstArray[$i] . " " . $secondArray[$i] . " ";
}
$resultArray = count($firstArray) >= count($secondArray) ? $firstArray : $secondArray;

for ($j = $i; $j < max(count($firstArray), count($secondArray)); $j++) {
    echo $resultArray[$j] . " ";
}
