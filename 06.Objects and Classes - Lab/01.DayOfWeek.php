<?php
$inputDate = readline();
printDateInEnglish($inputDate);

/**
 * @param string $inputDate
 * @throws Exception
 */
function printDateInEnglish(string $inputDate)
{
    $getDate = new DateTime($inputDate);
    echo $getDate->format('l') . PHP_EOL;
}
