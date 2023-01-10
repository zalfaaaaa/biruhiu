<?php

$db = mysqli_connect("localhost","root","","arutala");

$result = mysqli_query($db, "SELECT * FROM student");
// var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Read</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Student Data</h1>
    </div>
<div class="container mt-5 table-responsive">
<div class="d-grip gap-2 col-12">
<table class="table table-hover text-center table-borderless">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?=$row['nis'];?></td>
      <td><?=$row['name'];?></td>
      <td><?=$row['class'];?></td>
      <td>
        <a href="upfo.php?id=<?=$row['id'];?>" class="btn btn-sm btn-primary ml-auto mb-3">Update</a>

        <a href="delete.php?id=<?=$row['id'];?>" class="btn btn-sm btn-danger ml-auto mb-3">Delete</a>
      </td>
    </tr>
  </tbody>
  <?php $i++; ?>
  <?php endwhile ?>
</table>
    <div>
        <a href="crefo.php" class="btn btn-dark ml-auto mb-3">New</a>
    </div>
  </div>
  </div>
  </div>
</body>
</html>