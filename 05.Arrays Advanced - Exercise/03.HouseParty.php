<?php
$totalGuests = intval(readline());
$guestsList = [];

for ($i = 0; $i < $totalGuests; $i++) {
    $list = explode(" ", readline());

    if (count($list) == 3) {
        if (in_array($list[0], $guestsList) == false) {
            $guestsList[] = $list[0];
        } else {
            echo "$list[0] is already in the list!" . PHP_EOL;
        }
    } elseif (count($list) == 4) {
        $index = array_search($list[0], $guestsList);

        if (array_search($list[0], $guestsList)) {
            unset($guestsList[$index]);
        } else {
            echo "$list[0] is not in the list!" . PHP_EOL;
        }
    }
}
echo implode(PHP_EOL, $guestsList);
