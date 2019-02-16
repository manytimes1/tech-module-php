<?php
$integer = intval(readline());
$sum = 0;

while ($integer > 0) {
    $sum += $integer % 10;
    $integer /= 10;
}
echo $sum;
