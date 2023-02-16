<?php

session_start();

include('../connect.php');

$id = $_POST['idspp'];
$year = $_POST['year'];
$nom = $_POST['nominal'];

$query = $maru->query("UPDATE `spp` SET `year`='$year',`nominal`='$nom' WHERE `idspp`=$id");
$data = $query->fetch();

if($query){
    header('location:spp.php');
}else{
    header('location:spp.php?error=$pesan_error');
}