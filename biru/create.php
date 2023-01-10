<?php


$nis = $_POST['nis'];
$nm = $_POST['name'];
$cls = $_POST['class'];

$z = new PDO ("mysql:host=localhost;dbname=arutala",'root','');
$query = $z->query("INSERT INTO `student` VALUES ('','$nis','$nm','$cls')");

if($query){
header("location:read.php");}