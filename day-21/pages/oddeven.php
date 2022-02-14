<?php include "pages/includes/header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-capitalize">Calculator</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="firstNumber" class="col-md-4 col-form-label">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="firstNumber" id="firstNumber" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for=lastNumber" class="col-md-4 col-form-label">Last Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="lastNumber" id="lastNumber" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Options" class="col-md-4 col-form-label">Options</label>
                                <div class="col-md-8">
                                    <label><input type="radio" name="option" value="+" id=""> + ADD</label>
                                    <label><input type="radio" name="option" value="-" id=""> - SUB</label>
                                    <label><input type="radio" name="option" value="*" id=""> * MUL</label>
                                    <label><input type="radio" name="option" value="/" id=""> / DIV</label>
                                    <label><input type="radio" name="option" value="%" id=""> % MOD</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for=result" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <input type="number" name="result" id="result" class="form-control" value="<?php echo isset($result)?$result :''?>"  readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-8">
                                    <input type="submit" name="submitBtn" class="btn btn-outline-success d-block" value="Get Result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "pages/includes/footer.php"; ?>
