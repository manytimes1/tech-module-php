<?php
$dayNumber = intval(readline());
$days = ["Monday", "Tuesday", "Wednesday", "Thursday",
    "Friday", "Saturday", "Sunday"];

if ($dayNumber >= 1 && $dayNumber <= 7) {
    echo $days[$dayNumber - 1];
} else {
    echo "Invalid Day!";
}
