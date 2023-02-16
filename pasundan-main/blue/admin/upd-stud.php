<?php

session_start();

include('../connect.php');

$id = $_GET['nisn'];

$query = $maru->query("SELECT * FROM `student` WHERE `nisn`='$id'");
$data = $query->fetch();

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
        .card{
            max-width: 350px;
            max-height: 500px;
            padding: 30px 30px 30px 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 
                0 5px 9px 0 rgba(0, 0, 0, 0.2), 
                0 6px 20px 0 rgba(0, 0, 0, 0.20);
        }
    </style>
</head>
<body style="background-color: #E0F1F1;font-family: 'Poppins', sans-serif;">
<div class="container" style="margin-top: 80px;">
  <div class="row">
    <div class="col">
      <!-- Column -->
    </div>
    <div class="col">
      <div class="card">
        <div class="card-body">
            <form action="upg-stud.php" method="post">
                <div class="d-flex">
                    <h3 class="fw-bold"><ion-icon name="people" class="text-center"></ion-icon>&nbsp;Student Data</h3>
                </div>
                    <h6 class="fw-normal"><em>update data</em></h6>
                    <hr class="divider"> 
                <div class="row">
                    <div class="col mt-2 mb-3">
                        <label for="form-label" class="fw-bold mb-1">Nisn</label>
                        <input type="text" name="nisn" value="<?= $data['nisn']?>" class="form-control rounded-3" placeholder="000000" required>
                    </div>
                    <div class="col mt-2 mb-3">
                        <label for="form-label" class="fw-bold mb-1">Nis</label>
                        <input type="text" name="nis" value="<?= $data['nis']?>" class="form-control rounded-3" placeholder="000000" required> 
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2 mb-3">
                        <label for="form-label" class="fw-bold mb-1">Name</label>
                        <input type="text" name="name" value="<?= $data['name']?>" class="form-control rounded-3" placeholder="Jake Dru" required>
                    </div>
                    <div class="col mt-2 mb-3">
                        <label for="form-label" class="fw-bold mb-1">Image</label>
                        <input type="file" name="img" value="<?= $data['img']?>" class="form-control rounded-3" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2 mb-3">
                        <label for="form-label" class="fw-bold mb-1">Adress</label>
                        <input type="text" name="address" value="<?= $data['address']?>" class="form-control rounded-3" placeholder="Aussie" required>
                    </div>
                    <div class="col mt-2 mb-3">
                        <label for="form-label" class="fw-bold mb-1">Phone No.</label>
                        <input type="text" name="phoneno" value="<?= $data['phoneno']?>" class="form-control rounded-3" placeholder="0000000" required>
                    </div>
                </div>
                <div class="mt-3 text-center d-flex">
                    <button type="submit" class="btn btn text-center fw-bold shadow" style="width:150px;background-color:#8DCBE6;border-radius:12px">Save</button>&emsp;
                    <a href="student.php" class="btn btn text-center text-light fw-bold shadow" style="width:150px;background-color:#ba0000;border-radius:12px">Cancel</a>
                </div>
            </form>
        </div>
      </div>
    </div>
    <div class="col">
      <!-- Column -->
    </div>
  </div>
</div>
</body>
</html>