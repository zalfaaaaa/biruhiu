<?php

session_start();

include('../connect.php');

$nm = $_POST['name'];
$usn = $_POST['username'];
$pw = $_POST['password'];
$lvl = $_POST['level'];
$img = $_POST['img'];

$query = $maru->query("INSERT INTO staff VALUES('', '$nm', '$usn', '$pw', '$lvl', '$img')");
$data = $query->fetch();

if($query){
    header('location:staff.php');
}else{
    header('location:newstaff.php?error=$pesan_error');
}