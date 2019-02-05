<?php
$number = intval(readline());

for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j < $number; $j++) {
        for ($k = 0; $k < $number; $k++) {
            $letters = chr($i + 97) . chr($j + 97)
                . chr($k + 97);
            echo $letters . PHP_EOL;
        }
    }
}
