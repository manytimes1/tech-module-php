<?php
$day = mb_strtolower(readline());
$age = intval(readline());
$price = 0;

if ($day == "weekday") {
    if (($age >= 0 && $age <= 18)
        || $age > 64 && $age <= 122) {
        $price = 12;
    } elseif ($age > 18 && $age <= 64) {
        $price = 18;
    }
} elseif ($day == "weekend") {
    if (($age >= 0 && $age <= 18)
        || $age > 64 && $age <= 122) {
        $price = 15;
    } elseif ($age > 18 && $age <= 64) {
        $price = 20;
    }
} elseif ($day == "holiday") {
    if ($age >= 0 && $age <= 18) {
        $price = 5;
    } elseif ($age > 18 && $age <= 64) {
        $price = 12;
    } elseif ($age > 64 && $age <= 122) {
        $price = 10;
    }
}

if ($price !== 0) {
    echo $price . "$";
} else {
    echo "Error!";
}
