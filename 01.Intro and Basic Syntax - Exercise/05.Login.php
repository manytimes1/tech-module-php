<?php
$username = readline();
$password = readline();
$validPassword = strrev($username);
$counter = 0;

while ($password !== $validPassword) {
    $counter++;

    if ($counter === 4) {
        printf("User %s blocked!", $username);
        return;
    }
    echo "Incorrect password. Try again." . PHP_EOL;
    $password = readline();
}

printf("User %s logged in.", $username);
