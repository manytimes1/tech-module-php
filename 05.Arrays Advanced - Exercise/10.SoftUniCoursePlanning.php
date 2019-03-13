<?php
$elements = explode(", ", readline());

while (($command = readline()) != "course start") {
    $tokens = explode(":", $command);

    switch ($tokens[0]) {
        case "Add":
            $elements = addLesson($elements, $tokens[1]);
            break;
        case "Insert":
            $elements = insertLessonToIndex($elements, $tokens[1], $tokens[2]);
            break;
        case "Remove":
            $elements = removeLesson($elements, $tokens[1]);
            break;
        case "Swap":
            $elements = swap($elements, $tokens[1], $tokens[2]);
            break;
        case "Exercise":
            $elements = addExercise($elements,$tokens[1]);
            break;
    }
}
for ($i = 0; $i < count($elements); $i++) {
    $number = $i + 1;
    echo "$number.$elements[$i]" . PHP_EOL;
}

function addLesson(array $elements, string $lesson)
{
    if (existingValue($lesson, $elements)) {
        $elements[] = $lesson;
    }
    return $elements;
}

function insertLessonToIndex(array $elements,
                             string $lesson,
                             int $index)
{
    $isValidIndex = ($index >= 0 && $index < count($elements)) ? 1 : 0;

    if (existingValue($lesson, $elements) && $isValidIndex) {
        array_splice($elements, $index, 0, $lesson);
    }
    return $elements;
}

function removeLesson(array $elements, string $lesson)
{
    $index = array_search($lesson, $elements);

    if ($index !== false) {
        array_splice($elements, $index, 1);
    }
    return $elements;
}

function swap(array $elements,
              string $firstLesson,
              string $secondLesson)
{
    $firstLessonIndex = array_search($firstLesson, $elements);
    $secondLessonIndex = array_search($secondLesson, $elements);

    if ($firstLessonIndex !== false && $secondLessonIndex !== false) {
        $elements[$secondLessonIndex] = $firstLesson;
        $elements[$firstLessonIndex] = $secondLesson;
    }
    return $elements;
}

function addExercise(array $elements, string $lesson)
{
    $index = array_search($lesson, $elements);

    if ($index !== false) {
        $exercise = $lesson . "-Exercise";
        if ($elements[$index + 1] !== $exercise) {
            array_splice($elements, $index + 1, 0, $exercise);
        }
    } else {
        $elements[] = $lesson;
        $elements[] = $lesson . "-Exercise";
    }
    return $elements;
}

function existingValue(string $lesson, array $elements)
{
    if (!in_array($lesson, $elements)) {
        return true;
    }
    return false;
}
