<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"></link>
    <title>Admin</title>
</head>
<body style="font-family:'poppins', sans-serif;">
    <!-- sidebar -->
    <div class="container-fluid">
    <div class="row flex-nowrap" >
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color:#0b0b0b">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 mt-3">
            <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://i.pinimg.com/564x/b3/ce/ba/b3cebae5052eb99a5213ffedf2411693.jpg" alt="hugenerd" width="30" height="30" class="rounded-circle">&nbsp;
                        <span class="d-none d-sm-inline mx-1" style="font-weight: bold;">Julien Khai</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="border-radius: 20px;background-color:#1d1d1d">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Log out</a></li>
                    </ul>
                </div>
                <!-- batas     -->
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 fas-fa-home"></i> <span class="ms-1 d-none d-sm-inline text-light">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 fas-fa-file-alt"></i> <span class="ms-1 d-none d-sm-inline text-light">Student Data</span> </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 fas-fa-file-alt"></i> <span class="ms-1 d-none d-sm-inline text-light">Officer Data</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-light">SPP Data</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-light">Payment Entry</span> </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-light">History Payment</span> </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <!-- end -->
        <div class="col py-3">
            <h3>Left Sidebar with Submenus</h3>
            <p class="lead">
                An example 2-level sidebar with collasible menu items. The menu functions like an "accordion" where only a single 
                menu is be open at a time. While the sidebar itself is not toggle-able, it does responsively shrink in width on smaller screens.</p>
            <ul class="list-unstyled">
                <li><h5>Responsive</h5> shrinks in width, hides text labels and collapses to icons only on mobile</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>