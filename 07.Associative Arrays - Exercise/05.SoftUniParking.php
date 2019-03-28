<?php
$usersCount = intval(readline());
$systemData = [];

for ($i = 0; $i < $usersCount; $i++) {
    $data = explode(" ", readline());

    switch ($data[0]) {
        case "register":
            $username = $data[1];
            $licensePlateNumber = $data[2];

            if (key_exists($username, $systemData)) {
                echo "ERROR: already registered with plate number $licensePlateNumber" . PHP_EOL;
            } else {
                $systemData[$username] = $licensePlateNumber;
                echo "$username registered $licensePlateNumber successfully" . PHP_EOL;
            }
            break;
        case "unregister":
            $username = $data[1];

            if (!key_exists($username, $systemData)) {
                echo "ERROR: user $username not found" . PHP_EOL;
            } else {
                echo "$username unregistered successfully" . PHP_EOL;
                unset($systemData[$username]);
            }
            break;
    }
}

foreach ($systemData as $username => $licensePlateNumber) {
    echo "$username => $licensePlateNumber" . PHP_EOL;
}
