<?php
$numbers = [];

for ($i = 0; $i < 3; $i++) {
    $numbers[$i] = doubleval(readline());
}
arsort($numbers);

foreach ($numbers as $number) {
    echo $number . PHP_EOL;
}
