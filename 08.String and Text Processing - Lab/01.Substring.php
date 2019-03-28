<?php
$firstString = readline();
$secondString = readline();

while ((strpos($secondString, $firstString)) !== false ) {
    $secondString = str_replace($firstString, "", $secondString);
}
echo $secondString;

