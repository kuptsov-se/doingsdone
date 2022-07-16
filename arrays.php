<?php

$students = [
    [
        'id' => 1,
        'name' => 'Ruslan Nanai',
        'math' => 3,
        'ukr' => 4,
        'eng' => 3,
    ],
    [
        'id' => 2,
        'name' => 'Andrey Ivanov',
        'math' => 5,
        'ukr' => 5,
        'eng' => 4,
    ],
    [
        'id' => 3,
        'name' => 'Oleg Petrov',
        'math' => 3,
        'ukr' => 4,
        'eng' => 3,
    ],
    [
        'id' => 4,
        'name' => 'Ivan Dorn',
        'math' => 4,
        'ukr' => 4,
        'eng' => 4,
    ],
    [
        'id' => 5,
        'name' => 'Eugen Ibragimov',
        'math' => 5,
        'ukr' => 4,
        'eng' => 4,
    ],
];
foreach ($students as $student) {
    $avgMarksStudent = avgMarks($student['math'], $student['ukr'], $student['eng']);
    $roundedAvgMarksStudent = round($avgMarksStudent, 2);
    echo $student['name'] . ':' . $roundedAvgMarksStudent . '<br>';
}
function avgMarks($mathMark, $ukrMark, $engMark) {
    $avgMarks = ($mathMark + $ukrMark + $engMark) / 3;
    return $avgMarks;
}
