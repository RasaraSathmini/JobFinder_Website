<?php 
session_start();
header('location:jobFinderSearsh.php');
?>
<?php
include 'Dbconnect.php';

if(isset($_POST['searchbtn']))
{
    $title=$_POST['title'];
  /*  $dropd=$_POST['drop'];
    $Salry=$_POST['salary'];
    $whours=$_POST['whours'];
    $employor=$_POST['employe'];
    $tn=$_POST['tn'];
    $address=$_POST['adress'];
    $email=$_POST['email'];
    $vacations=$_POST['vacation'];
    $description=$_POST['desc'];*/

   // $reg1="INSERT INTO jobs(Title,Job_Category,Salary,Working_Hours,Employer,Cantact_Number,Adress,Email,Vacations,Descriptions) VALUES('$title','$dropd','$Salry','$whours','$employor','$tn','$address','$email','$vacations','$description')";
    //mysqli_query($conn,$reg1);

    $s1="SELECT * FROM jobs WHERE Title='$title LIMIT 1'";
    $result1=mysqli_query($conn,$s1);
    while($row=mysqli_fetch_array($result1))
    {
        $title=$_POST['Title'];
        $Salry=$_POST['Salary'];
        $whours=$_POST['Working_Hours'];
        $employor=$_POST['Employer,'];
        $tn=$_POST['Cantact_Number'];
        $address=$_POST['Adress'];
        $email=$_POST['Email'];
        $vacations=$_POST['Vacations'];
        $description=$_POST['Descriptions']; 
    }
   // $num1=mysqli_num_rows($result1);
mysqli_free_result($result1);
/*else
{
    $Salry="";
    $whours="";
    $employor="";
    $tn=$_POST"";
    $address="";
    $email="";
    $vacations="";
    $description=""; 
}*/
  /*  if($num1 == 1)
    {
        echo"email already taken";

    }
    else
    {
        $reg1="INSERT INTO jobs(Title,Job_Category,Salary,Working_Hours,Employer,Cantact_Number,Adress,Email,Vacations,Descriptions) VALUES('$title','$dropd','$Salry','$whours','$employor','$tn','$address','$email','$vacations','$description')";
        mysqli_query($conn,$reg1);
    }*/
   
}