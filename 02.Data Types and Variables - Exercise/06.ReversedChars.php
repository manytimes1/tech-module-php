<?php
$chars = [];

for ($i = 0; $i < 3; $i++) {
    $chars[$i] = readline();
}
$result = implode(" ", array_reverse($chars));
echo $result;
