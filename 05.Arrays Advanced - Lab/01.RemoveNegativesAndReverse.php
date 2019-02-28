<?php
$input = array_map('intval', explode(" ", readline()));
$isPositiveNumber = array_filter($input, function ($number) {
    return ($number > 0);
});
$result = array_reverse($isPositiveNumber);

if (count($result) != 0) {
    echo  implode(" ", $result);
} else {
    echo "empty";
}
