<?php
while (true) {
    $num = intval(readline());

    if ($num % 2 !== 0) {
        echo "Please write an even number." . PHP_EOL;
        continue;
    } else {
        echo "The number is: " . abs($num);
        break;
    }
}
