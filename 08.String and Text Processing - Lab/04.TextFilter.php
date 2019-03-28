<?php
$words = explode(", ", readline());
$text = readline();

for ($i = 0; $i < count($words); $i++) {
    $replace = str_repeat("*", strlen($words[$i]));
    $text = str_replace($words[$i], $replace, $text);
}
echo $text;
