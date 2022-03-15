<?php
include "pages/header.php";
?>
<section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h1 class="text-center text-light">Print A Series</h1>
                        </div>
                        <div class="card-body btn-primary">
                            <form action="action.php" method="POST">
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="starting_number" class="form-label">Starting Number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" name="starting_number" id="starting_number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="ending_number" class="form-label">Ending Number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" name="ending_number" id="ending_number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="you_series" class="form-label">Your Series</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea name="you_series" id="you_series" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="seriesBtn" class="btn btn-light" value="Click for Series">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include 'pages/footer.php';
?>