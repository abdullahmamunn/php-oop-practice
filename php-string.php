<?php
    require_once "PhpStringManipulation.php";
    $string = new PhpStringManipulation();
    $res = $string->stringManipulation($_POST);
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

                <div class="card-header"><h3>Php String</h3></div>
                <div class="card-body">
                    <form action="" method="post" id="formValidation">
                        <div class="form-group row">

                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Enter a String</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="given_string" id="firstName" placeholder="Put a sentence">
                                <span id="firstNameErr" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Result:</label>
                            <div class="col-md-8">
                                <p>
                                    <?php
                                    echo $res['given_string']."<br>";
                                    echo "Total Character =>".$res['len'];
                                    echo "<br>";
                                    echo "Total words =>".$res['total_word']."<br>";
                                    echo "Encryption =>".$res['string_crypt']."<br>";
//                                    echo "Explode of  =>".$res['get_index']."<br>";
                                    echo "<pre>";
                                    print_r($res['get_index']);

                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2"></label>
                            <div class="col-md-8">
                                <input type="submit" name="btn" value="Submit" class="btn btn-success">
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