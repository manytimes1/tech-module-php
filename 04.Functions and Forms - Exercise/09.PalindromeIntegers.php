<?php
while (($input = readline()) != "END") {
    if (isPalindrome($input)) {
        echo "true" . PHP_EOL;
    } else {
        echo "false" . PHP_EOL;
    }
}

function isPalindrome($number)
{
    $front = str_split($number);
    $back = array_reverse($front);

    if ($front == $back) {
        return true;
    }
    return false;
}
