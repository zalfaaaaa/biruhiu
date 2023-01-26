<?php

session_start();

include('connect.php');

$usn = $_POST['username'];
$pass = $_POST['password'];

$query = $maru->query("SELECT * FROM login WHERE username='$usn' AND password='$pass'");
$data = $query->fetch();

if($query->rowCount()> 0){
    if($data['role']=="admin"){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['role'] = "admin";
        header('location:admin/rumah.php');
    }else if($data['role']=="student"){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['role'] = "student";
        header('location:student/home.php');
    }if($data['role']=="staff"){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['role'] = "staff";
        header('location:staff/home.php');
    }
} 
else {
    header('location:login.php?error=$pesan_error');
}