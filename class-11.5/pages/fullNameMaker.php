<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-sca
          lable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Full Name Maker </title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h1 class="card-header text-center text-success">Full Name Maker</h1>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-8 mx-auto">
                                    <form action="action.php" method="post" class="form">
                                        <div class="row mb-3">
                                            <div class="col-3">
                                                <label for="first_name" class="form-label text-success">First Name</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="text" name="first_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-3">
                                                <label for="last_name" class="form-label text-success">Last Name</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="text" name="last_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-3">
                                                <label for="full Name" class="form-label text-success">Full Name</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="text" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6"></div>
                                            <div class="col-3">
                                                <input type="submit" name="fullName_btn" class="btn btn-success" value="Make Full Name">
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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