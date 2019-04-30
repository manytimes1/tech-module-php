<?php
$roads = [];

while (($input = readline()) !== "END") {
    $data = explode("->", $input);

    switch ($data[0]) {
        case "Add":
            if (!key_exists($data[1], $roads)) {
                $roads[$data[1]] = [];
            }
            array_push($roads[$data[1]], $data[2]);
            break;
        case "Move":
            $racerOnRoad = array_search($data[2], $roads[$data[1]]);

            if ($racerOnRoad !== false) {
                array_push($roads[$data[3]], $data[2]);
                array_splice($roads[$data[1]], $racerOnRoad, 1);
            }
            break;
        case "Close":
            unset($roads[$data[1]]);
            break;
    }
}

uksort($roads, function ($roadOne, $roadTwo) use ($roads) {
    $countOne = count($roads[$roadOne]);
    $countTwo = count($roads[$roadTwo]);

    if ($countOne == $countTwo) {
        return $roadOne <=> $roadTwo;
    }
    return $countTwo <=> $countOne;
});

echo "Practice sessions:" . PHP_EOL;

foreach ($roads as $road => $racers) {
    echo $road . PHP_EOL;

    foreach ($racers as $racer) {
        echo "++$racer" . PHP_EOL;
    }
}
