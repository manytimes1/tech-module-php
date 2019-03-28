<?php
$materials = ["shards" => 0, "fragments" => 0, "motes" => 0];
$junk = [];
$keepFarming = true;
$material = "";

while ($keepFarming) {
    $data = explode(" ", readline());

    for ($i = 0; $i < count($data); $i += 2) {
        $quantity = intval($data[$i]); // 3
        $currentMaterial = strtolower($data[$i + 1]);

        if (!key_exists($currentMaterial, $materials)) {
            if (!key_exists($currentMaterial, $junk)) {
                $junk[$currentMaterial] = $quantity;
            } else {
                $junk[$currentMaterial] += $quantity;
            }
        } else {
            $materials[$currentMaterial] += $quantity;

            if ($materials[$currentMaterial] >= 250) {
                $materials[$currentMaterial] -= 250;
                $material = $currentMaterial;
                $keepFarming = false;
                break;
            }
        }
    }
}

switch ($material) {
    case "shards":
        echo "Shadowmourne obtained!" . PHP_EOL;
        break;
    case "fragments":
        echo "Valanyr obtained!" . PHP_EOL;
        break;
    case "motes":
        echo "Dragonwrath obtained!" . PHP_EOL;
        break;
}
array_multisort(array_values($materials), SORT_DESC,
    array_keys($materials), SORT_ASC, $materials);

ksort($junk);

foreach ($materials as $material => $quantity) {
    echo "$material: $quantity" . PHP_EOL;
}

foreach ($junk as $material => $quantity) {
    echo "$material: $quantity" . PHP_EOL;
}
