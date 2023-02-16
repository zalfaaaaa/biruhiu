<?php

session_start();

include('../connect.php');

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nm = $_POST['name'];
$img = $_POST['img'];
$ids = $_POST['idspp'];
$idc = $_POST['idcls'];
$adr = $_POST['address'];
$no = $_POST['phoneno'];

$query = $maru->query("INSERT INTO `student` VALUES (`$nisn`, `$nis`, `$nm`, `$img`, `$idc`, `$adr`, `$no`, `$ids`)");
$data = $query->fetchAll();

if($query){
    header('location:student.php');
}else{
    header('location:newstudent.php?error=$pesan_error');
}