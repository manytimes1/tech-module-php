<?php
$n = intval(readline());
$firstOutput = [];
$secondOutput = [];

for ($i = 0; $i < $n; $i += 2) {
    $firstInput = explode(" ", readline());
    $secondInput = explode(" ", readline());

    $firstOutput[] .= $firstInput[0];
    $firstOutput[] .= $secondInput[1];
    $secondOutput[] .= $firstInput[1];
    $secondOutput[] .= $secondInput[0];
}
echo implode(" ", $firstOutput) . PHP_EOL . implode(" ", $secondOutput);
