<?php
$firstNumber = doubleval(readline());
$secondNumber = doubleval(readline());
$eps = 0.000001;
$diff = abs($firstNumber - $secondNumber);

if ($diff < $eps) {
    echo "True";
} else {
    echo "False";
}
