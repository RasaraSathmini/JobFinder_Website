
<?php 
session_start();
header('location:login.php');
?>
<?php
include 'Dbconnect.php';

if(isset($_POST['signupsubmit']))
{
    $name=$_POST['uname'];
    $password=$_POST['pass'];
    $hashedpwd =password_hash($password, PASSWORD_DEFAULT);
    $email=$_POST['email'];

    $s="SELECT * FROM signup WHERE Uname='$name'";
    $result=mysqli_query($conn,$s);
    $num=mysqli_num_rows($result);

    if($num == 1)
    {
        echo"user name already taken";

    }
    else
    {
        $reg="INSERT INTO signup(Uname,Password,Email) VALUES('$name','$password','$email')";
        mysqli_query($conn,$reg);
    }
   
}

?>