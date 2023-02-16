<?php

session_start();

include('../connect.php');
$query = $maru->query('SELECT * FROM staff')->fetchAll();

if(!isset($_SESSION['username'])){
    header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap csss -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icon  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>3</title>
    <style>
        .cardBox{
            position: relative;
            width: 100%;
            padding: 10px;
            display: grid;
            grid-template-columns: repeat(4,1fr);
            grid-gap: 30px;
        }
        .cardBox .card1{
            position: relative;
            background:#1d1d1d;
            color: white;
            padding: 30px;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            box-shadow: 0 8px 26px rgba(0, 0, 0, 0.09);
        }
        .card1:hover{
            background: #f2f2f2;
            color: #000;
        }
    </style>
</head>
<body style="background-color: #E0F1F1;font-family: 'Poppins', sans-serif;">
    <!-- navbar -->
    <nav class="navbar d-flex navbar-dark justify-content-between" style="background-color: #1d1d1d;">
        <a class="navbar-brand fw-bold">
        &emsp;<img src="../totoro.png" alt="" width="30" height="30" class="d-inline-block align-top">
        SPP Payment</a>
    <form class="form-inline d-flex">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">&emsp;
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>&emsp;
    </form>
    </nav>
    <!-- sidebar -->
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #0b0b0b;">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 mt-3 float-start">
                    <!-- profile -->
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../admin/img/<?= $_SESSION['img']; ?>" alt="hugenerd" width="30" height="30" class="rounded-circle">&nbsp;
                        <span class="d-none d-sm-inline mx-1" style="font-weight: bold;"><?php echo $_SESSION['username'];?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" style="border-radius: 20px;background-color:#1d1d1d">
                        <li>
                            <a href=""  class="dropdown-item"><ion-icon name="person"></ion-icon>&nbsp;Profile</a>
                        </li>
                        <hr class="dropdown-divider">
                        <li>
                            <a href="../logout.php" class="dropdown-item"><ion-icon name="log-out"></ion-icon>&nbsp;Logout</a>
                        </li>
                    </ul>
                    </div>
                    <!-- end profile -->
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start fw-bold" id="menu">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link align-middle px-0 text-light"><ion-icon name="home"></ion-icon>&nbsp;Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="history.php" class="nav-link align-middle px-0 text-light"><ion-icon name="hourglass"></ion-icon>&nbsp;History</a>
                        </li>
                        <li class="nav-item">
                            <a href="enpay.php" class="nav-link align-middle px-0 text-light"><ion-icon name="logo-paypal"></ion-icon>&nbsp;Entry Payment</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
    <!-- end sidebar -->
    <!-- content -->
    <div class="col py-3 konten d-flex flex-column"></div>  
    <!-- end content  -->
    </div>
</div>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</body>
</html>