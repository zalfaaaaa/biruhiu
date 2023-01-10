<?php

$id = $_POST['id'];
$nis = $_POST['nis'];
$nm = $_POST['name'];
$cls = $_POST['class'];

$n = new PDO("mysql:host=localhost;dbname=arutala",'root','');
$query =  $n->query("UPDATE `student` SET `nis`='$nis',`name`='$nm',`class`='$cls' WHERE `id`='$id'");

if($query){
    header("location:read.php");
}

