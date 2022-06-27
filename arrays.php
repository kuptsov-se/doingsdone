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
    echo 'Student id: ' . $studentInfo['id'] . '<br>';
    echo 'Student: ' . $studentInfo['name'] . '<br>';
    //foreach ($students as $studentInfo => $studentData) {
        $mathMark = $studentInfo ['math'];
        $ukrMark = $studentInfo ['ukr'];
        $engMark = $studentInfo ['eng'];
        $marksSum = $mathMark + $ukrMark + $engMark;
        $avg = $marksSum / 3;
        echo 'AVG mark: ' . $avg . '<br>';

}
