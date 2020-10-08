<?php
//require_once "./app/classes/Student.php";
require_once 'vendor/autoload.php';
// use app\classes\Student;
use App\classes\Student;


if(isset($_GET['delete']))
{
    $id = $_GET['id'];
    Student::deleteStudentSingleData($id);
}


$showMessage = '';
$student = Student::getStudentData();


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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mr-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Student Data</h3>
                    <ul>
                        <li><a href="view-data.php">View Data</a></li>
                        <li><a href="student-info.php">Add Data</a></li>
                    </ul>
                    <h4 class="text-success">
                        <?php
                        if (isset($_GET['msg2']) && $_GET['msg2']==1)
                        {
                            echo "Data save Successfully";
                        }
                        ?>
                    </h4>
                    <h4 class="text-success">
                        <?php
                           if (isset($_GET['msg']) && $_GET['msg']==1)
                           {
                               echo "Data updated Successfully";
                           }
                        ?>
                    </h4>
                    <h4 class="text-danger">
                        <?php
                           if (isset($_GET['msg1']) && $_GET['msg1']==1)
                           {
                               echo "Data Deleted Successfully";
                           }
                        ?>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Confirm Password</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; while ($data = mysqli_fetch_assoc($student)){?>
                        <tr>
                            <th scope="row"><?php echo $i;?></th>
                            <td><?php echo $data['first_name']?></td>
                            <td><?php echo $data['last_name']?></td>
                            <td><?php echo $data['email']?></td>
                            <td><?php echo $data['password']?></td>
                            <td><?php echo $data['confirm_pass']?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $data['id']?>">Edit</a>
                                <a href="?delete=true&id=<?php echo $data['id'];?>" onclick="return confirm('Are you sure want to delete?')">Delete</a>
                            </td>

                        </tr>
                        <?php $i++; }?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<!--<script src="bootstrap/js/form.js"></script>-->
</body>
</html>