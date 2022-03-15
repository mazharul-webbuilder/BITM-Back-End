
<?php
include "pages/header.php";
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h1 class="text-center text-light">Calculator</h1>
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
                                        <label for="Resutl" class="form-label">Result</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo $myResult;?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="action" class="form-label"></label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-label"><input type="radio" name="action" class="" value="+"> Addition</label>
                                        <label class="flex-column"><input type="radio" name="action" class="" value="-"> Subtraction</label>
                                        <label class="flex-column"><input type="radio" name="action" class="" value="*"> Multiplication</label>
                                        <label class="flex-column"><input type="radio" name="action" class="" value="/"> Division</label>
                                        <label class="flex-column"><input type="radio" name="action" class="" value="%"> Reminder</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="calBtn" class="btn btn-light" value="Click for Result">
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
include "pages/footer.php";

?>

