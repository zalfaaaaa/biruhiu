<?php

session_start();

include('../connect.php');

$id = $_GET['idcls'];
$query = $maru->query("DELETE FROM class WHERE idcls = '$id' ");

if($query){
    header('location:cls.php');
}