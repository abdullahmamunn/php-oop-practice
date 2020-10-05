<?php

require_once "Person.php";
require_once "PhpProgrammer.php";
require_once "PythonProgrammer.php";
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
            <div class="card card">
                <div class="card-header"><h3>OOP php</h3></div>
                <div class="card-body card">
                    <div class="h-100">
                        <?php

                            // $person = new Person();
                             echo "<br>";
                             //$person->schoolEduacation();
//                             echo "</br>";
//                             echo $person->name."</br>";
//                             echo $person->address;
                            $phpProgrammer = new PhpProgrammer();
                            //$phpProgrammer->name="mamun";
                            //$phpProgrammer->salary = "20k";
                            //$phpProgrammer->showName();
                            //$phpProgrammer->showPrivateProperty();
                            echo "<br>";
                            $pythonProgrammer = new PythonProgrammer();
                            $pythonProgrammer->showInfo();
                            //$pythonProgrammer->showName();

                        ?>
                    </div>
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