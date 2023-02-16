<?php

session_start();

include('../connect.php');

$id = $_GET['nisn'];
$query = $maru->query("DELETE FROM student WHERE nisn = '$id' ");

if($query){
    header('location:student.php');
}