<?php

session_start();

include('../connect.php');

$id = $_GET['idstaff'];
$query = $maru->query("DELETE FROM staff WHERE idstaff = '$id' ");

if($query){
    header('location:staff.php');
}