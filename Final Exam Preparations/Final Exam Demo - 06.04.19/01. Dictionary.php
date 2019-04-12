<?php
$wordsAndDefinition = explode(" | ", readline());
$dictionary = [];

for ($i = 0; $i < count($wordsAndDefinition); $i++) {
    $current = explode(": ", $wordsAndDefinition[$i]);
    $word = $current[0];
    $definition = $current[1];

    if (!key_exists($word, $dictionary)) {
        $dictionary[$word] = [];
    }
    $dictionary[$word][] = $definition;
}

$someWords = explode(" | ", readline());

foreach ($someWords as $someWord) {
    if (key_exists($someWord, $dictionary)) {
        echo $someWord . PHP_EOL;
        usort($dictionary[$someWord], function ($d1, $d2) {
            return strlen($d2) <=> strlen($d1);
        });

        foreach ($dictionary[$someWord] as $definition) {
            echo " -$definition" . PHP_EOL;
        }
    }
}

$command = readline();

if ($command === "List") {
    uksort($dictionary, function ($word1, $word2) {
        return strcmp($word1, $word2);
    });

    foreach ($dictionary as $word => $item) {
        echo "$word ";
    }
} elseif ($command === "End") {
    return;
}
