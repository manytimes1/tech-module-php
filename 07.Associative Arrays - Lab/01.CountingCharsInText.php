<?php
$input = readline();
$chars = [];

for ($i = 0; $i < strlen($input); $i++) {
    if (!key_exists($input[$i], $chars)) {
        $chars[$input[$i]] = 0;
    }
    $chars[$input[$i]]++;
}

foreach ($chars as $char => $value) {
    echo "$char -> $value" . PHP_EOL;
}
