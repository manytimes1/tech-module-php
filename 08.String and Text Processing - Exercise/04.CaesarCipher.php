<?php
$text = readline();
$encrypted = "";

for ($i = 0; $i < strlen($text); $i++) {
    $encrypted .= chr(ord($text[$i]) + 3);
}
echo $encrypted;
