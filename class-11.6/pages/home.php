<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
       <div class="container">
           <a href="#" class="navbar-brand">BRAND</a>
           <button class="navbar-toggler" data-bs-target="#menu" data-bs-toggle="collapse">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="menu">
               <ul class="navbar-nav ms-auto">
                   <li><a href="#" class="nav-link">Home</a></li>
                   <li><a href="#" class="nav-link">About</a></li>
                   <li><a href="#" class="nav-link">Gallery</a></li>
                   <li class="dropdown"><a href="#" class="nav-link dropdown-toggle" data-bs-target="#dropdown" data-bs-toggle="dropdown">More</a>
                       <ul class="dropdown-menu dropdown-menu-dark bg-dark" id="dropdown">
                           <li><a href="#" class="dropdown-item">LINK 1</a></li>
                           <li><a href="#" class="dropdown-item">LINK 2</a></li>
                           <li><a href="#" class="dropdown-item">LINK 3</a></li>
                           <li><a href="#" class="dropdown-item">LINK 4</a></li>
                       </ul>
                   </li>
                   <li><a href="#" class="nav-link">Contact</a></li>
               </ul>
           </div>
       </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h1 class="text-center text-warning card-title">Full Name Maker</h1>
                        </div>
                        <div class="card-body bg-danger">
                            <form action="action.php" method="POST">
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="first_name" class="form-label text-light">First Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control text-dark" id="first_name" name="first_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="last_name" class="form-label text-light">Last Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control text-dark" id="last_name" name="last_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="Full Name" class="form-label text-light">Full Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" id="Full Name" class="form-control" value="<?php echo $myFullName;?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-dark" name="nmBtn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script src="assets/js/jquery-3.6.0.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>