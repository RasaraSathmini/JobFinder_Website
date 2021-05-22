
<?php 
session_start();

?>
<?php
include 'Dbconnect.php';

if(isset($_POST['signupsubmit']))
{
    $name=$_POST['uname'];
    $password=$_POST['pass'];
    $hashedpwd =password_hash($password, PASSWORD_DEFAULT);
    $email=$_POST['email'];

    $s="SELECT * FROM signup WHERE Uname='$name' && Password='$password'";
    $result=mysqli_query($conn,$s);
    $num=mysqli_num_rows($result);

    if($num == 1)
    {
        header('location:Home.php');

    }
    else
    {
        header('location:Login.php');
        
    }
   
}

?>