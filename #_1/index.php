<?php

// #1

$students = ['ლუკა', 'გიორგი', 'სანდრო', 'ირაკლი'];
$time = [2, 6, 3, 2];

foreach ($students as $key => $name) {
    echo "სტუდენტის სახელი " . $name . " - " . "დასწრების საათების რაოდენობა " . $time[$key] ;
    echo '<br>';
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// #2

$studentsDesc = [
    'ლუკა' => 2,
    'გიორგი' => 6,
    'სანდრო' => 3,
    'ირაკლი' =>2
    ];

foreach ($studentsDesc as $personName => $personTime) {
    echo "სტუდენტის სახელი " . $personName. " - " . "დასწრების საათების რაოდენობა " . $personTime ;
    echo '<br>';
}

?>