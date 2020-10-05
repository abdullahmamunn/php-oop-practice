<?php
require_once "EvenOdd.php";
$evenOdd = new EvenOdd;
$res = $evenOdd->evenoddCalculation();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php oop</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 mr-auto">
            <div class="card">
                <div class="card-header"><h3>Calculate Even odd</h3></div>
                <div class="card-body">
                    <form action="" method="post" id="formValidation">
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">First Number</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="first_number" id="firstName" placeholder="First Name">
                                <span id="firstNameErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Second Number</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="last_number" id="lastName" placeholder="Last Name">
                                <span id="lastNameErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Check Even Odd</label>
                            <div class="col-md-8">
                                <input type="radio" value="even" name="check">
                                <label for=""><Strong>Even</Strong></label>
                                <br>
                                <input type="radio" value="odd" name="check">
                                <label for=""><Strong>Odd</Strong></label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Result</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="result" id="" cols="30" rows="5"><?php echo $res;?></textarea>
                                <span id="passwordErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2"></label>
                            <div class="col-md-8">
                                <input class="btn btn-success" type="submit" name="btn" value="Submit" id="submitBtn">

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
</body>
</html>