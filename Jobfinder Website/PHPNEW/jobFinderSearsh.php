<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .hedding {
            border: 1px solid;
            height: 7vh;
            border-style: outset;
            background: rgb(172,172,172);
background: linear-gradient(90deg, rgba(172,172,172,1) 0%, rgba(246,246,246,1) 100%);
        }

        .nav {
            text-decoration: none;
            display: block;
            float: left;
            margin-right: 2%;
            font-family: century gothic;
            color: black;
            margin-top: 1.1%;
            transition: 0.3s;
        }

        .home {
            margin-left: 68%;
        }

       /* .nav:hover {
            transform: scale(1.2);
        }*/

        .titleDiv {
            /*border: 1px solid;*/
            height: 12vh;
        }

        .title {
            font-size: 260%;
            text-align: center;
            margin-top: 1%;
            visibility: hidden;
            transition: 0.5s;
            
            animation-name: titlesAnime;
            animation-fill-mode: forwards;
            animation-duration: 0.8s;
            animation-delay: 0.5s;
        }

        .titleHr {
            width: 12%;
            color: black;
            background-color: black;
            margin-top: -1.5%;
            transition: 0.5s;

            
            animation-name: hrAnime;
            animation-fill-mode: forwards;
            animation-duration: 0.5s;
           /* animation-delay: 0.5s;*/
        }
          @keyframes titlesAnime{
            0%{transform: translateY(-7px);visibility: visible}
            100%{transform: translateY(10px);visibility: visible}
        }
       
        @keyframes hrAnime{
             0%{width: 0%}
            100%{width: 12%}
        }
        .detailsDiv{
            /*border: 1px solid;*/
            height: 76vh;
            border-style: outset;
        }
        .dd{
          /*  border: 1px solid;*/
            width: 49%;
            height: 100%;
            float: left;
            
        }
        .sb{
            font-family: Arial;
            font-size: 20px;
            display: block;
          /*  border: 1px solid ;*/
            width: 30%;
            float: left;
            text-align: center;
            margin-left: 10px;
            
        }
        .catDropDown{
            float: left;
            margin-top: 2%;
            margin-left: 5px;
            padding: 1%;
            width: 20%
        }
        .clear{
            clear: both;
        }
        .search {
            padding: 1%;
            width: 50%;
            margin-left: 25%;
            margin-top: 3%;
        }
        .btnSearch{
            width: 20%;
            padding: 1%;
            margin-top: 10px;
            margin-left: 32%;
        }
        img{
            margin-left: 27%;
            margin-top: 6%;
        }
        .label {
            width: 100%;
           /* border: 1px solid;*/
            font-family: century gothic;
            
        }
        .l{
            width: 21%;
            margin-left: 15%;
            margin-top: 10%;
            float: left;
        }
        .r{
            float: left;
            width: 60%;
           /* border: 1px solid;*/
            margin-top: 9%;
        }

        .table{
            width: 600px;
            margin: auto;
            table-layout: fixed;
            text-align: center;
            margin-top: 50px;
            font-family: Arial;
            color: #fff;

        }
        .table, .th, .td{
            border: 1px dotted white;
            border-collapse: collapse;
            padding: 15px;
            font-size: 20px;
        }

        th{
            background-color: #53D2ED;
            padding: 20px;
            text-transform: uppercase;
            
        }

         td{
            background-color: #9DE6F6;
            padding: 10px;
            text-transform: uppercase;
            
        }
    </style>
</head>

<body>
    <div class="hedding">
        <a href="Home.php" class="home nav">Home</a>
        <a href="jobFinderAdd.php" class="addJob nav">Add job</a>
        <a href="jobFinderSearsh.php" class="findJob nav">Find Job</a>
        <a href="QnA.php" class="QnA nav">Q&A</a>
        <a href="Login.php" class="login nav">Log in</a>
        

    </div>
    <div class="titleDiv">
        <h1 class="title">Find Your Job Here</h1>
        <hr class="titleHr">
    </div>
    <div class="detailsDiv" style="background-image: url(JoBFind.jpg);">
        <div class="ddLeft dd">
            <form action="jobFinderSearsh.php" method="POST">
                <p class="sb">Select your job category:</p>
            <select class="catDropDown inp" name="Job_Category">
                <option value="Electrician">Electrician</option>
                <option value="Sales">Sales</option>
                <option value="Marketing">Marketing</option>
                <option value="Software">Software</option>
            </select>
               <div class="clear"></div>
                
                <button class="btnSearch" type="submit" name="searchbtn">Search</button>
            </form>
            <br>


             <table>
                <tr>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Work Hours</th>
                    <th>Employer</th>
                    <th>Telephone Number</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Vacations</th>
                    <th>Description</th>
                </tr>
            
            <?php
                include 'Dbconnect.php';

                if(isset($_POST['searchbtn']))
                {
                    $JobCategory=$_POST['Job_Category'];
                    $sql1 = "SELECT * FROM jobs where Job_Category='$JobCategory'";
                    $sth = $conn->query($sql1);
                    while($rows = mysqli_fetch_array($sth)){
            ?>
                <tr>
                    <td><?php echo $rows['Title'];?></td>
                    <td><?php echo $rows['Salary'];?></td>
                    <td><?php echo $rows['Working_Hours'];?></td>
                    <td><?php echo $rows['Employer'];?></td>
                    <td><?php echo $rows['Cantact_Number'];?></td>
                    <td><?php echo $rows['Adress'];?></td>
                    <td><?php echo $rows['Email'];?></td>
                    <td><?php echo $rows['Vacations'];?></td>
                    <td><?php echo $rows['Descriptions'];?></td>
                </tr>

            <?php
                 }
            }

            ?>
            </table>





        </div>
        
        <div class="ddRight dd">
        <div class="l">
            
           </div>

           <div class="r">

                









           </div>
       
        </div>
           </div>

</body></html>