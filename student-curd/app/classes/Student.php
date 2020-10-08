<?php


namespace app\classes;


class Student
{
    private function db_connection()
    {
        $server = 'localhost';
        $user   = 'root';
        $password = '';
        $db_name = 'student';
        $conn =  mysqli_connect($server,$user,$password,$db_name);
        return $conn;

    }
    public function saveStudentInfo($data)
    {

       $sql = "INSERT INTO student_info(first_name,last_name,email,password,confirm_pass) 
     VALUES ('$data[first_name]','$data[last_name]','$data[email]',md5('$data[password]'),md5('$data[confirm_password]'))";
//         echo "<pre>";
//        print_r($conn);
        if(mysqli_query(Student::db_connection(),$sql)){
           header('Location:view-data.php?msg2=1');
        }else{
            die("connection problem".mysqli_error(Student::db_connection()));
        }
    }

    public function getStudentData()
    {
        $sql = "SELECT * FROM student_info";
        if(mysqli_query(Student::db_connection(),$sql))
        {
            $result = mysqli_query(Student::db_connection(),$sql);
            return $result;
        }
        else{
            die("query problem".mysqli_error(Student::db_connection()));
        }
    }

    public function getStudentSingleData($id)
    {
        $sql = "select * from student_info where id = '$id'";
        if(mysqli_query(Student::db_connection(),$sql)){
            $query_result = mysqli_query(Student::db_connection(),$sql);
            return $query_result;
        }
    }
    public function updateStudentData($data,$id)
    {
         $sql = "UPDATE student_info SET first_name ='$data[first_name]',last_name = '$data[last_name]',email = '$data[email]',password = md5('$data[password]'),confirm_pass = md5('$data[confirm_password]') WHERE id = '$id'";
         $query_result = mysqli_query(Student::db_connection(),$sql);
         if($query_result==1)
         {
            header('Location:view-data.php?msg=1');
         }
         else{
             die("Query problem".mysqli_error(Student::db_connection()));
    }
    }

    public function deleteStudentSingleData($id)
    {
        $sql = "delete from student_info where id = '$id'";
        if(mysqli_query(Student::db_connection(),$sql)){
            header('Location:view-data.php?msg1=1');
        }
        else{
            die('Sql query problem'.mysqli_error(Student::db_connection()));
        }
    }
}