<?php

$nilai = 90;

if ($nilai > 95) {
    $grade = "A+";
} elseif($nilai > 85){
    $grade = "A";
} elseif($nilai > 80){
    $grade = "B+";
} elseif($nilai > 75){
    $grade = "B";
} elseif($nilai > 60){
    $grade = "C+";
} elseif($nilai > 45){
    $grade = "C";
} elseif($nilai > 30){
    $grade = "D";
} elseif($nilai > 20){
    $grade = "E";
} else {
    $grade = "F";
}

echo "Nilai anda: $nilai<br>";
echo "Grade: $grade";

?><!DOCTYPE html>
<html>
<body>
