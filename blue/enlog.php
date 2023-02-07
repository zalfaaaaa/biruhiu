<?php

session_start();

include('connect.php');

$usn = $_POST['username'];
$pass = $_POST['password'];

$query = $maru->query("SELECT * FROM staff WHERE username='$usn' AND password='$pass'");
$data = $query->fetch();

if($query->rowCount()> 0){
    if($data['level']=="admin"){
        $_SESSION['img'] = $data['img'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['level'] = "admin";
        header('location:admin/house.php');
    }else if($data['level']=="staff"){
        $_SESSION['img'] = $data['img'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['level'] = "staff";
        header('location:staff/home.php');
    }
} 
else {
    header('location:login.php?error=username or password invalid');
}