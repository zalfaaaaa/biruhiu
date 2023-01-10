<?php

$id = $_GET['id'];

$db =new PDO("mysql:host=localhost;dbname=arutala",'root','');
$query = $db->query("SELECT * FROM `student` WHERE `id`='$id'");

$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <div class="container mt-5">
        <form action="update.php" method="post">
            <h1>Update Data</h1>
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-3">
                NIS 
                <input type="text" name="nis" class="form-control" value="<?= $data['nis'] ?>">
            </div>
            <div class="mb-3">
                Name 
                <input type="text" name="name" class="form-control" value="<?= $data['name'] ?>">
            </div>
            <div class="mb-3">
                Class 
                <input type="text" name="class" class="form-control" value="<?= $data['class'] ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
</body>
</html>