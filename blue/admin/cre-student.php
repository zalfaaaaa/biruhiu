<?php

session_start();

include('../connect.php');

$nisn = $_POST['nisn'];
$nis = $_POST['nisn'];
$nm = $_POST['name'];
$adr = $_POST['adress'];
$no = $_POST['phoneno'];
$img = $_POST['img'];


$query = $maru->query("INSERT INTO `student` VALUES ('$nisn','$nis','$nm','$img','','$adr','$no',''))")->fetchAll();

if($query){
    header('location:student.php');
}else{
    header('location:newstudent.php?error=$pesan_error');
}