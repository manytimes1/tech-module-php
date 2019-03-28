<?php
$rows = intval(readline());
$students = [];

for ($i = 0; $i < $rows; $i++) {
    $studentName = readline();
    $grade = doubleval(readline());

    if (!key_exists($studentName, $students)) {
        $students[$studentName] = $grade;
    } else {
        $averageGrade = ($students[$studentName] + $grade) / 2;
        $students[$studentName] = $averageGrade;
    }
}

arsort($students);
$results = array_filter($students, function ($grade) {
    return $grade >= 4.50;
});

foreach ($results as $name => $value) {
    $averageGrade = sprintf("%.2f", $value);
    echo "$name -> $averageGrade" . PHP_EOL;
}
