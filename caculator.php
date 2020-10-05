<?php
    $res = ' ';
    require_once "CalculatorOperation.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 mr-auto">
            <div class="card">

                <div class="card-header"><h3>Calculator</h3></div>
                <div class="card-body">
                    <form action="" method="post" id="formValidation">
                        <div class="form-group row">
                         <?php
                              $calculatorOperation = new CalculatorOperation();
                              $res = $calculatorOperation->Calculation($_POST);

                         ?>

                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">First Number</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="first_number" value="<?php echo ($_POST['first_number'])?>" id="firstName" placeholder="First Number">
                                <span id="firstNameErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Last Name</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="second_number" value="<?php echo ($_POST['second_number'])?>" id="lastName" placeholder="Second Number">
                                <span id="lastNameErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Result</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="result" value="<?php echo $res;?>" id="lastName" placeholder="Result">
                                <span id="lastNameErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2"></label>
                            <div class="col-md-8">
                                <input class="btn btn-success" type="submit" name="btn" value="+" id="submitBtn">
                                <input class="btn btn-success" type="submit" name="btn" value="-" id="submitBtn">
                                <input class="btn btn-success" type="submit" name="btn" value="X" id="submitBtn">
                                <input class="btn btn-success" type="submit" name="btn" value="/" id="submitBtn">
                                <input class="btn btn-success" type="submit" name="btn" value="%" id="submitBtn">

                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/form.js"></script>
</body>
</html>