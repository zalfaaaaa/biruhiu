<?php

session_start();

include('../connect.php');

$year = $_POST['year'];
$nom = $_POST['nominal'];

$query = $maru->query("INSERT INTO `spp` VALUES ('','$year','$nom')");
$data = $query->fetch();

if($query){
    header('location:spp.php');
}else{
    header('location:spp.php?error=$pesan_error');
}