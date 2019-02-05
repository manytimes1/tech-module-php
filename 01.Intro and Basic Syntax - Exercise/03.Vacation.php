<?php
$groupNumber = intval(readline());
$groupType = strtolower(readline());
$day = strtolower(readline());
$totalPrice = 0;

if ($groupType == "students") {
    if ($day == "friday") {
        $totalPrice = $groupNumber * 8.45;
    } elseif ($day == "saturday") {
        $totalPrice = $groupNumber * 9.80;
    } elseif ($day == "sunday") {
        $totalPrice = $groupNumber * 10.46;
    }

    if ($groupNumber >= 30) {
        $totalPrice -= $totalPrice * 0.15;
    }
} elseif ($groupType == "business") {
    if ($groupNumber >= 100) {
        $groupNumber -= 10;
    }

    if ($day == "friday") {
        $totalPrice = $groupNumber * 10.90;
    } elseif ($day == "saturday") {
        $totalPrice = $groupNumber * 15.60;
    } elseif ($day == "sunday") {
        $totalPrice = $groupNumber * 16;
    }
} elseif ($groupType == "regular") {
    if ($day == "friday") {
        $totalPrice = $groupNumber * 15;
    } elseif ($day == "saturday") {
        $totalPrice = $groupNumber * 20;
    } elseif ($day == "sunday") {
        $totalPrice = $groupNumber * 22.50;
    }

    if ($groupNumber >= 10 && $groupNumber <= 20) {
        $totalPrice -= $totalPrice * 0.05;
    }
}

printf("Total price: %.2f", $totalPrice);
