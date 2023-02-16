<?php

session_start();

include('../connect.php');

$id = $_GET['idspp'];
$query = $maru->query("DELETE FROM spp WHERE idspp = '$id' ");

if($query){
    header('location:spp.php');
}