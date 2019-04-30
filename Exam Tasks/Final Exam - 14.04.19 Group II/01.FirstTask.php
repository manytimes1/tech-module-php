<?php
$pattern = '/([#\$\%\*\&])([a-zA-Z]+)(\1)=(\d+)!!(.+)/';

while (($input = readline()) == true) {
    if (preg_match($pattern, $input, $matches)) {
        $racerName = $matches[2];
        $lengthOfCode = intval($matches[4]);
        $encryptedCode = $matches[5];

        if ($lengthOfCode == strlen($encryptedCode)) {
            $geohashCode = "";

            for ($i = 0; $i < strlen($encryptedCode); $i++) {
                $decryptCode = chr(ord($encryptedCode[$i]) + $lengthOfCode);
                $geohashCode .= $decryptCode;
            }
            echo "Coordinates found! $racerName -> $geohashCode";
            break;
        } else {
            echo "Nothing found!" . PHP_EOL;
        }
    } else {
        echo "Nothing found!" . PHP_EOL;
    }
}
