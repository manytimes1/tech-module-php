<?php
$input = preg_split("/[ .,?!]/", readline(), null, PREG_SPLIT_NO_EMPTY);
$palindromes = [];

for ($i = 0; $i < count($input); $i++) {
    if ($input[$i] == strrev($input[$i])) {
        $palindromes[] = $input[$i];
    }
}
$palindromes = array_unique($palindromes);
natcasesort($palindromes);
echo implode(", ", $palindromes);
