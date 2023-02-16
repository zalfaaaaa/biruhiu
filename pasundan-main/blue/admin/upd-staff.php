<?php

session_start();

include('../connect.php');

$id = $_GET['idstaff'];

$query = $maru->query("SELECT * FROM `staff` WHERE `idstaff`='$id'");
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
                3px 3px 3px 3px rgba(0, 0, 0, 0.08), 
                3px 3px 3px 3px rgba(0, 0, 0, 0.08);
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
            <form action="upg-staff.php" method="post">
                <div class="d-flex">
                    <h3 class="fw-bold"><ion-icon name="people" class="text-center"></ion-icon>&nbsp;Staff Data</h3>
                </div>
                    <h6 class="fw-normal"><em>create new data</em></h6>
                    <hr class="divider"> 
                    <input type="hidden" name="idstaff" value="<?= $id ?>">
                <div class="row">
                    <div class="col mt-2 mb-3">
                        <label for="form-label" class="fw-bold mb-1">Name</label>
                        <input type="text" name="namest" class="form-control rounded-3" placeholder="Mark Lee" required value="<?=$data['namest']?>">
                    </div>
                    <div class="col mt-2 mb-3">
                        <label for="form-label" class="fw-bold mb-1">Username</label>
                        <input type="text" name="username" class="form-control rounded-3" placeholder="Mark" required value="<?=$data['username']?>"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2 mb-3">
                        <label for="form-label" class="fw-bold mb-1">Password</label>
                        <input type="password" name="password" class="form-control rounded-3" placeholder="****" required value="<?=$data['password']?>">
                    </div>
                    <div class="col mt-2 mb-3">
                        <label for="form-label" class="fw-bold mb-1">Level</label>
                        <select name="level" id="" class="form-select rounded-3">
                            <option value="admin"  <?= $data['idstaff'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                            <option value="staff"  <?= $data['idstaff'] == 'staff' ? 'selected' : '' ?>>Staff</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="form-label" class="fw-bold mb-1">Image</label>
                    <input type="file" name="img" class="form-control rounded-3" value="<?=$data['img']?>" required>
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