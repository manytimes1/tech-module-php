<?php
$words = array_map("strtolower", explode(" ", readline()));
$elements = [];

foreach ($words as $word) {
    if (!key_exists($word, $elements)) {
        $elements[$word] = 1;
    } else {
        $elements[$word]++;
    }
}
$result = [];

foreach ($elements as $element => $value) {
    if ($value % 2 != 0) {
        $result[] = $element;
    }
}
echo implode(" ", $result);
