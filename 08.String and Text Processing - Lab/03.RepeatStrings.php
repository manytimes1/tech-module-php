<?php
$words = explode(" ", readline());

foreach ($words as $word) {
    echo str_repeat($word, strlen($word));
}
