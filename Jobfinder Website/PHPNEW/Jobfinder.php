<?php 
session_start();
header('location:jobFinderAdd.php');
?>
<?php
include 'Dbconnect.php';

if(isset($_POST['submitbtn']))
{
    $title=$_POST['title'];
    $dropd=$_POST['drop'];
    $Salry=$_POST['salary'];
    $whours=$_POST['whours'];
    $employor=$_POST['employe'];
    $tn=$_POST['tn'];
    $address=$_POST['adress'];
    $email=$_POST['email'];
    $vacations=$_POST['vacation'];
    $description=$_POST['desc'];

   // $reg1="INSERT INTO jobs(Title,Job_Category,Salary,Working_Hours,Employer,Cantact_Number,Adress,Email,Vacations,Descriptions) VALUES('$title','$dropd','$Salry','$whours','$employor','$tn','$address','$email','$vacations','$description')";
    //mysqli_query($conn,$reg1);

    $s1="SELECT * FROM jobs WHERE Email='$email'";
    $result1=mysqli_query($conn,$s1);
    $num1=mysqli_num_rows($result1);

    if($num1 == 1)
    {
        echo"email already taken";

    }
    else
    {
        $reg1="INSERT INTO jobs(Title,Job_Category,Salary,Working_Hours,Employer,Cantact_Number,Adress,Email,Vacations,Descriptions) VALUES('$title','$dropd','$Salry','$whours','$employor','$tn','$address','$email','$vacations','$description')";
        mysqli_query($conn,$reg1);
    }
   
}

