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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
            background:#fff;
            color: black;
            padding: 30px;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            box-shadow: 0 8px 26px rgba(0, 0, 0, 0.09);
        }
        .card1:hover{
            background: #1d1d1d;
            color: #fff;
        }
        /* responsive */
        @media (max-width: 797){
            .cardBox{
                display: flex;
                justify-content: space-evenly;
                flex-direction: column;
            }
        }
        @media(max-width: 309px){
            .cardBox{
                position: relative;
                width: 100%;
                padding: 10px;
                grid-gap: 30px;
                justify-content: space-evenly;
                flex-direction: column;
            }
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
                        <img src="img/<?= $_SESSION['img']; ?>" alt="hugenerd" width="30" height="30" class="rounded-circle">&nbsp;
                        <span class="d-none d-sm-inline mx-1" style="font-weight: bold;"><?php echo $_SESSION['username'];?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" style="border-radius: 20px;background-color:#1d1d1d">
                        <li>
                            <a href=""  class="dropdown-item"><ion-icon name="person"></ion-icon>&nbsp;Profile</a>
                        </li>
                        <hr class="dropdown-divider">
                        <li>
                            <a href="../logout.php" onclick="return confirm('affh iyh mau logout?')" class="dropdown-item"><ion-icon name="log-out"></ion-icon>&nbsp;Logout</a>
                        </li>
                    </ul>
                    </div>
                    <!-- end profile -->
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start fw-bold" id="menu">
                        <li class="nav-item">
                            <a href="house.php" class="nav-link align-middle px-0 text-light"><ion-icon name="home"></ion-icon>&nbsp;Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="history.php" class="nav-link align-middle px-0 text-light"><ion-icon name="hourglass"></ion-icon>&nbsp;History</a>
                        </li>
                        <li class="nav-item">
                            <a href="enpay.php" class="nav-link align-middle px-0 text-light"><ion-icon name="logo-paypal"></ion-icon>&nbsp;Entry Payment</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link align-middle px-0 text-light"><ion-icon name="file-tray-stacked"></ion-icon>&nbsp; Data &emsp;<ion-icon name="caret-down"></ion-icon></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="spp.php" class="nav-link px-0 text-white"><ion-icon name="documents"></ion-icon>&nbsp;SPP</a>
                                </li>
                                <li class="w-100">
                                    <a href="student.php" class="nav-link px-0 text-white"><ion-icon name="people"></ion-icon>&nbsp;Student</a>
                                </li>
                                <li class="w-100">
                                    <a href="staff.php" class="nav-link px-0 text-white"><ion-icon name="people"></ion-icon>&nbsp;Staff</a>
                                </li>
                                <li class="w-100">
                                    <a href="cls.php" class="nav-link px-0 text-white"><ion-icon name="book"></ion-icon>&nbsp;Class</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
    <!-- end sidebar -->
    <!-- content -->
    <div class="col py-3 konten d-flex flex-column">
        <div class="cardBox">
            <div class="card1">
                <div class="">
                    <div class="numbers">History</div>
                    <div class="cardname"></div>
                </div>
                <div class="iconbox">
                    <ion-icon name="home"></ion-icon>
                </div>
            </div>
            <div class="card1">
                <div class="">
                    <div class="numbers">Entry Payment</div>
                    <div class="cardname">Pembayaran</div>
                </div>
                <div class="iconbox">
                    <ion-icon name="logo-paypal"></ion-icon>
                </div>
            </div>
            <div class="card1">
                <div class="">
                    <div class="numbers">Data</div>
                    <div class="cardname">student, staff, spp, class</div>
                </div>
                <div class="iconbox">
                    <ion-icon name="file-tray-stacked"></ion-icon>
                </div>
            </div>
        </div>
    </div>  
    <!-- end content  -->
    </div>
</div>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</body>
</html>