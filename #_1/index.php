<?php

// #1

$students = ['ლუკა', 'გიორგი', 'სანდრო', 'ირაკლი'];
$time = [2, 6, 3, 2];

foreach ($students as $key => $name) {
    echo $name . " - " . $time[$key] . " დასწრების საათების რაოდენობა";
    echo '<br>';
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// #2

$studentsDesc = [
    'luka' => 2,
    'giorgi' => 6,
    'sandro' => 3,
    'irakli' =>2
    ];

foreach ($studentsDesc as $personName => $personTime) {
    echo $personName. " - " . $personTime . " დასწრების საათების რაოდენობა";
    echo '<br>';
}

?>