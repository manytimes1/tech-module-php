<?php
$sequence = explode(" ", readline());
$result = [];

foreach ($sequence as $key) {
    if (!key_exists($key, $result)) {
        $result[$key] = 1;
    } else {
        $result[$key]++;
    }
}
ksort($result);

foreach ($result as $key => $value) {
    echo "$key -> $value" . PHP_EOL;
}
