<?php

$id=$_GET['id'];

$d = new PDO('mysql:host=localhost;dbname=arutala','root',''); 
$query = $d->query("DELETE FROM `student` WHERE `id`='$id' ");

if($query){
    header('location:read.php');}