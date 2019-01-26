<?php
$hours = intval(readline());
$minutes = intval(readline()) + 30;

if ($minutes > 59) {
    $hours += 1;
    $minutes -= 60;
}

if ($hours > 23) {
    $hours = 0;
}

printf("%d:%02d", $hours, $minutes);
