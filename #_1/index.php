<?php

// #1

$students = ['luka', 'giorgi', 'sandro', 'irakli'];
$time = [2, 6, 3, 2];

foreach ($students as $key => $name) {
    echo $name . $time[$key];
    echo '<br>';
}


// #2

$studentsDesc = [
    'luka' => 2,
    'giorgi' => 6,
    'sandro' => 3,
    'irakli' =>2
    ];

foreach ($studentsDesc as $personName => $personTime) {
    echo $personName . $personTime;
    echo '<br>';
}

?>
