




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
                <div class="card-header"><h3>Php concat</h3></div>
                <div class="card-body">
                    <form action="" method="post" id="formValidation">
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">First Name</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="first_name" id="firstName" placeholder="First Name">
                                <span id="firstNameErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Last Name</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="last_name" id="lastName" placeholder="Last Name">
                                <span id="lastNameErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Email</label>
                            <div class="col-md-8">
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                                <span id="emailAddresErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Password</label>
                            <div class="col-md-8">
                                <input class="form-control" type="password" name="password" id="password" placeholder="password">
                                <span id="passwordErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Confirm Password</label>
                            <div class="col-md-8">
                                <input class="form-control" type="password" name="confirm_password" id="confirmPassword" placeholder="Confirm password">
                                <span id="confirmPasswordErr" class="text-danger"></span>
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
                <?php
//                echo "<pre>";
//                print_r($_POST);
//                var_dump($_POST);
//                $firstName = $_POST['first_name'];
//                $lastName  = $_POST['last_name'];
//                $fullName = $firstName." ".$lastName;
//                echo $fullName;
                if(isset($_POST['btn']))
                {
                    require_once "MyInformations.php";
                    $myInformation = new MyInformations();
                    $res = $myInformation->fullname($_POST);
                    echo $res;

                }
                ?>
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