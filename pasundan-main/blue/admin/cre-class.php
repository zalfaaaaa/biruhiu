<?php

session_start();

include('../connect.php');

$cls = $_POST['clsname'];
$scom = $_POST['skillcom'];

$query = $maru->query("INSERT INTO `class` VALUES ('','$cls','$scom')");
$data = $query->fetch();

if($query){
    header('location:cls.php');
}else{
    header('location:cls.php?error=$pesan_error');
}