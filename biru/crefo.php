<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
    <div class="container mt-5">
        <form action="create.php" method="post">
            <h1>Create New Data</h1>
            <div class="mb-3">
                NIS 
                <input type="text" name="nis" class="form-control">
            </div>
            <div class="mb-3">
                Name 
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                Class 
                <input type="text" name="class" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
</body>
</html>