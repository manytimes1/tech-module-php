<?php
$stores = [];

while (($input = readline()) !== "END") {
    $data = explode("->", $input);

    switch ($data[0]) {
        case "Add":
            $items = explode(",", $data[2]);

            if (!key_exists($data[1], $stores)) {
                $stores[$data[1]] = [];
            }

            foreach ($items as $item) {
                array_push($stores[$data[1]], $item);
            }
            break;
        case "Remove":
            if (key_exists($data[1], $stores)) {
                unset($stores[$data[1]]);
            }
            break;
    }
}

uksort($stores, function ($key1, $key2) use ($stores) {
    if (count($stores[$key1]) == count($stores[$key2])) {
        return $key2 <=> $key1;
    }
    return count($stores[$key2]) <=> count($stores[$key1]);
});

echo "Stores list:" . PHP_EOL;

foreach ($stores as $store => $value) {
    echo $store . PHP_EOL;

    foreach ($value as $item) {
        echo "<<$item>>" . PHP_EOL;
    }
}
