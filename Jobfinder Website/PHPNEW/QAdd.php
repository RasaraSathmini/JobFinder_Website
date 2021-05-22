<?php 
//session_start();
?>
<?php
include 'DbConnect.php';

if(isset($_POST['submitbtn']))
{
    $q1=$_POST['q1'];
    $a1=$_POST['choice1'];

    
    $q2=$_POST['q2'];
    $a2=$_POST['choice2'];

    $q3=$_POST['q3'];
    $a3=$_POST['choice3'];

    $q4=$_POST['q4'];
    $a4=$_POST['choice4'];
    

    $q5=$_POST['q5'];
    $a5=$_POST['ans'];
   
    $reg1="INSERT INTO qna(quection01,answer01,quection02,answer02,quection03,answer03,quection04,answer04,quection05,answer05) VALUES('$q1','$a1','$q2','$a2','$q3','$a3','$q4','$a4','$q5','$a5')";
    mysqli_query($conn,$reg1);

    echo "Quizz Submitted";

   
}
