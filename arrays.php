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
        'eng' =>3,
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
    foreach ($students as $studentInfo) {
        echo 'Student ' . $studentInfo['name'] . '<br>';
        foreach ($studentInfo as $fieldName => $studentData) {
            echo $fieldName . ': ' . $studentData . '<br>';
        }


}
$avg1 = (3 + 4 + 3) / 3;
    echo "AVGid 1 : $avg1 <br>";
    $avg2 = (5 + 5 + 4) / 3;
    echo "AVGid 2 : $avg2 <br>";
    $avg3 = (3 + 4 + 3) / 3;
    echo "AVGid 3 : $avg3 <br>";
    $avg4 = (4 + 4 + 4) / 3;
    echo "AVGid 4 : $avg4 <br>";
    $avg5 = (5 + 4 + 4) / 3;
    echo "AVGid 5 : $avg5 <br>";


