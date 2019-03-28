<?php
$courses = [];

while (($input = readline()) != "end") {
    $data = explode(" : ", $input);
    list($courseName, $studentName) = $data;

    if (!key_exists($courseName, $courses)) {
        $courses[$courseName] = [];
    }
    array_push($courses[$courseName], $studentName);
}

uasort($courses, function ($a, $b) {
    return (count($a) == count($b)) ? 0 : (($a > $b) ? -1 : 1);
});

foreach ($courses as $course => $students) {
    echo "$course: "
        . count($students)
        . PHP_EOL;

    sort($students);

    foreach ($students as $student) {
        echo "-- $student" . PHP_EOL;
    }
}
