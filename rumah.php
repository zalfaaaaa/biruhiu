<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;">
    <div class="container-fluid banner" style="height:100vh;background:linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://scontent.fcgk18-1.fna.fbcdn.net/v/t39.30808-6/310377020_4786850234751588_2436906591982298411_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFCvIALXz4DYd6MIcXX7Z-liEsS2mkrI1-ISxLaaSsjX5cwLVHIzDh5puP9zHoPGAYNWDzAmqBjR_u0VF_FVkLl&_nc_ohc=j2l5MgtdNqEAX_J0gZR&_nc_ht=scontent.fcgk18-1.fna&oh=00_AfBf8ybXqATNXaTaSAUitJObzINWGdGJfPWov7YtRUCytg&oe=63CAA92A');background-size:cover;background-position:center;">
    <nav class="navbar navbar-expand-lg navbar-dark shadow-lg">
        <div class="container-fluid mt-3" style="font-family: 'Poppins', sans-serif;">
            <h1 style="color:white">SMK<span class="" style="color:#BFEAF5">Mutu</span></h1>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="home"> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="about">About</a>
              </li>
            </ul>
        </nav>
        <div class="container-fluid banner-content col-lg-8" style="height:70%;display:flex;justify-content:center;color:white;align-items:center">
            <div>
                <p style="font-family: 'Oswald', sans-serif;font-size:60px" class="text-center d-none d-md-block">
                    SMK 1 MUHAMMADIYAH CIKAMPEK
                </p>
                <form action="">
                    <input type="text" placeholder="      Apa yang engkau cari?" class="form-control mt-5" style="border-radius:50px;height:60px;width:24cm">
                    <button type="submit" class="btn btn-warning btn-block" style="border-radius:30px;position:absolute;right:6cm;top:9.3cm;font-weight:500;height:50px;padding:0 30px;"> Search</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="bg-light mt-5 text-center text-lg-start">
      
    </footer>
</body>
</html>