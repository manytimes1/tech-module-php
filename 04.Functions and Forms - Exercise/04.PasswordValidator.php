<?php
$password = readline();
validator($password);

function validator(string $password)
{
    if (!isInRange($password)) {
        echo "Password must be between 6 and 10 characters" . PHP_EOL;
    }

    if (!isLetterOrDigit($password)) {
        echo "Password must consist only of letters and digits" . PHP_EOL;
    }

    if (!hasEnoughDigits($password)) {
        echo "Password must have at least 2 digits" . PHP_EOL;
    }

    if (isInRange($password) && isLetterOrDigit($password)
        && hasEnoughDigits($password)) {
        echo "Password is valid";
    }
}

function isInRange(string $password)
{
    if (strlen($password) >= 6 && strlen($password) <= 10) {
        return true;
    }
    return false;
}

function isLetterOrDigit(string $password)
{
    if (ctype_alnum($password)) {
        return true;
    }
    return false;
}

function hasEnoughDigits(string $password)
{
    $count = 0;

    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_digit($password[$i])) {
            $count++;
        }
    }

    if ($count < 2) {
        return false;
    }
    return true;
}
