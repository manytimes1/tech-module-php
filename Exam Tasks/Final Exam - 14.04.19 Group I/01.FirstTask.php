<?php
$pattern = '/^([A-Za-z\d\!\@\#\$\?]+)=(\d+)<<(.+)/';

while (($input = readline()) !== 'Last note') {
    if (preg_match($pattern, $input, $matches)) {
        $peakName = $matches[1];
        $length = intval($matches[2]);
        $geohashCode = $matches[3];

        if ($length === strlen($geohashCode)) {
            $nameOfMountain = '';

            for ($i = 0; $i < strlen($peakName); $i++) {
                if (ctype_alnum($peakName[$i])) {
                    $nameOfMountain .= $peakName[$i];
                }
            }
            echo "Coordinates found! $nameOfMountain -> $geohashCode" . PHP_EOL;
        } else {
            echo 'Nothing found!' . PHP_EOL;
        }
    } else {
        echo 'Nothing found!' . PHP_EOL;
    }
}
