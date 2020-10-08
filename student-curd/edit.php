<?php
//require_once "./app/classes/Student.php";
require_once 'vendor/autoload.php';
// use app\classes\Student;
use App\classes\Student;
   $showMessage = '';
   $id = $_GET['id'];
   $data = Student::getStudentSingleData($id);
   $row = mysqli_fetch_assoc($data);

if(isset($_POST['btn']))
{
    Student::updateStudentData($_POST,$id);
}

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
                <div class="card-header">
                    <h3>Edit Student Data</h3>
                    <ul>
                        <li><a href="view-data.php">View Data</a></li>
                        <li><a href="student-info.php">Add Data</a></li>
                    </ul>
                    <h4 class="text-success"><?php echo $showMessage;?></h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" id="formValidation">
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">First Name</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="first_name" value="<?php echo $row['first_name'];?>" id="firstName" placeholder="First Name">
                                <span id="firstNameErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Last Name</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="last_name" value="<?php echo $row['last_name'];?>" id="lastName" placeholder="Last Name">
                                <span id="lastNameErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Email</label>
                            <div class="col-md-8">
                                <input class="form-control" type="email" name="email" value="<?php echo $row['email'];?>" id="email" placeholder="Email">
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
                                <input class="btn btn-success" type="submit" name="btn" value="Update" id="submitBtn">

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