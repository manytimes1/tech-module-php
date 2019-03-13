<?php
$sequence = explode(" ", readline());
$reversedSequence = [];

for ($i = 0; $i < count($sequence); $i++) {
    $reversedSequence[] .= strrev($sequence[$i]);
}
echo array_sum($reversedSequence);
