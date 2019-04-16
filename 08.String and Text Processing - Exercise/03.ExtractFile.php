<?php
$path = readline();
$file = substr($path, strrpos($path, "\\") + 1);
$fileName = substr($file, 0, (strrpos($file, ".") + 1) - 1);
$fileExtension = substr($file, strrpos($file, ".") + 1);
echo "File name: $fileName"
    . PHP_EOL
    . "File extension: $fileExtension"
    . PHP_EOL;
