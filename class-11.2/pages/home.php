<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Full NameMaker</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
   <nav class="navbar navbar-expand-md navbar-dark bg-dark">
       <div class="container">
           <a href="" class="navbar-brand">LOGO</a>
           <button class="navbar-toggler" data-bs-target="#menu" data-bs-toggle="collapse">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="menu">
               <ul class="navbar-nav ms-auto">
                   <li><a href="#" class="nav-link">Home</a></li>
                   <li><a href="#" class="nav-link">About</a></li>
                   <li><a href="#" class="nav-link">Portfolio</a></li>
                   <li class="dropdown"><a href="#" data-bs-target="#dropdown" data-bs-toggle="dropdown" class="nav-link dropdown-toggle">Dropdown</a>
                       <ul class="dropdown-menu dropdown-menu-dark bg-dark" id="dropdown">
                           <li><a href="#" class="dropdown-item">LINK 1</a></li>
                           <li><a href="#" class="dropdown-item">LINK 2</a></li>
                           <li><a href="#" class="dropdown-item">LINK 3</a></li>
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
                   <div class="card border-0">
                       <h3 class="text-center">Full NameMaker</h3>
                   </div>
                   <div class="card-body">
                       <form action="action.php" method="post">
                           <div class="row mb-3">
                               <label for="first_name" class="col-md-3">First Name</label>
                               <div class="col-md-9">
                                   <input type="text" name="first_name" class="form-control">
                               </div>
                           </div>

                           <div class="row mb-3">
                               <label for="last_name" class="col-md-3">Last Name</label>
                               <div class="col-md-9">
                                   <input type="text" name="last_name" class="form-control">
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-3"></div>
                               <div class="col-md-9">
                                   <input type="submit" name="make_fullName" value="Make Full Name" class="btn btn-success">
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </section>








<script src="assets/js/jquery-3.6.0.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>