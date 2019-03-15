<?php
$input = explode(", ", readline());
$towns = [];

for ($i = 0; $i < count($input); $i += 2) {
    if (!isset($towns[$input[$i]])) {
        $towns[$input[$i]] = 0;
    }
    $towns[$input[$i]] += intval($input[$i + 1]);
}

foreach ($towns as $town => $value) {
    echo "$town => $value" . PHP_EOL;
}
