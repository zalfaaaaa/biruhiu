<?php

session_start();

include('../connect.php');

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$name = $_POST['name'];
$img = $_POST['img'];
$adr = $_POST['address'];
$no = $_POST['phoneno'];

$query = $maru->query("UPDATE `student` SET `nisn`='$nisn',`nis`='$nis',`name`='$name',`img`='$img',`idcls`='',`address`='$adr',`phoneno`='$no',`idspp`='' WHERE `nisn`='$nisn'");

if($query){
    header('location:student.php');
}