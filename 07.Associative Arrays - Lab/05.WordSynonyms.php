<?php
$wordCount = intval(readline());
$words = [];

for ($i = 0; $i < $wordCount; $i++) {
    $word = readline();

    if (!key_exists($word, $words)) {
        $words[$word] = [];
    }
    $synonym = readline();
    array_push($words[$word], $synonym);
}

uksort($words, function ($firstWord, $secondWord) use ($words) {
    if (count($words[$firstWord])
        == count($words[$secondWord])) {
        return $firstWord <=> $secondWord;
    }
    return count($words[$secondWord]) <=> count($words[$firstWord]);
});

foreach ($words as $word => $synonym) {
    echo "$word - "
        . implode(", ", $synonym)
        . PHP_EOL;
}
