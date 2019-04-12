<?php
$encryptedString = readline();
$pattern = '/^[d-z{}|#]+$/';

if (!preg_match($pattern, $encryptedString)) {
    echo "This is not the book you are looking for.";
    return;
} else {
    $decrypted = '';

    for ($i = 0; $i < strlen($encryptedString); $i++) {
        $current = ord($encryptedString[$i]) - 3;
        $decrypted .= chr($current);
    }

    $substrings = explode(" ", readline());
    $result = str_replace($substrings[0], $substrings[1], $decrypted);
    echo $result;
}
