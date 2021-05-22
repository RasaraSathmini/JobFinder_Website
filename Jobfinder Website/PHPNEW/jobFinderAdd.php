<?php 

include 'Dbconnect.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .hedding {
            /*border: 1px solid; */
            height: 7vh;
           /* border-style: outset; */
            background: linear-gradient(to bottom right, #666633 -28%, #ffffff 92%);
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

        .nav:hover {
            transform: scale(1.2);
        }

        .titleDiv {
            /*border: 1px solid;*/
            height: 12vh;
        }

        .title {
            font-size: 260%;
            text-align: center;
            margin-top: 1%;
            transition: 0.1s;
            /*border: 1px solid;*/
            visibility: hidden;
            
            animation-name: titlesAnime;
            animation-fill-mode: forwards;
            animation-delay: 0.5s;
            animation-duration: 0.8s;
        }
        @keyframes titlesAnime{
            0%{transform: translateY(-7px);visibility: visible}
            100%{transform: translateY(10px);visibility: visible}
        }
       
        @keyframes hrAnime{
             0%{width: 0%}
            100%{width: 12%}
        }

        .titleHr {
            width: 12%;
            color: black;
            background-color: black;
            margin-top: -1.5%;
            
            animation-name: hrAnime;
            animation-fill-mode: forwards;
            animation-duration: 0.5s;
        }
       
        .textFields {
           /* border: 1px solid;*/
            height: 100vh;
            
        }
         .details{
            border: 1px solid;
             width: 40%;
             height: 75%;
             margin-left: 5%;
             border-radius: 10px;
             border-style: outset;
             float: left;
             transition: 0.5s;
/*  background: #FFA17F; 
background: -webkit-linear-gradient(to right, #00223E, #FFA17F); 
background: linear-gradient(to right, #00223E, #FFA17F); */
             
          /*   animation-name: colorAnime;
             animation-fill-mode: forwards;
             animation-duration: 0.8s;*/
             
             background-image: url(PlantsatworkWeekimage2.jpg);
             background-position: center;
             background-size: 100%;

   
        }
        @keyframes colorAnime{
            0% {background-color: white}
         /*   100%{background: #FFA17F;
                background: -webkit-linear-gradient(to right, #00223E, #FFA17F);
                background: linear-gradient(to right, #00223E, #FFA17F);
                }*/
            100%{background-color: goldenrod}
        }
        .inp{
            width: 40%;
            padding: 1%;
            margin-top: 2%;
            margin-left: 25%;
        }
        .txtBox{
            margin-top: 4%;
        }
        .submitBtn{
            padding: 1.8%;
            width: 50%;
            color: black;
            margin-left:20%;
            margin-top: 3%;
            transition: 0.2s;  
            background-color: goldenrod;
            border: none;
            font-size: 120%;
            font-family: century gothic;
        }
        .submitBtn:hover{
            transform:scale(1.1);
            
        }
        .captionDiv{
           /* border: 1px solid;*/
            width: 50%;
            float: left;
            height: 70vh;
        }
        .tl{
            text-align: center;
        }
        .capDet{
            width: 70%;
            margin-left: 15%;
            font-family: century gothic;
            
            visibility: hidden;
            animation-name: titlesAnime2;
            animation-fill-mode: forwards;
            animation-delay: 0.5s;
            animation-duration: 0.8s;
        }
         @keyframes titlesAnime2{
            0%{transform: translateY(7px);visibility: visible}
            100%{transform: translateY(0px);visibility: visible}
        }
        .capTitle{
           /* margin-top: -1%;*/
            visibility: hidden;
            animation-name: titlesAnime;
            animation-fill-mode: forwards;
            animation-delay: 0.5s;
            animation-duration: 0.8s;
            
        }
         @keyframes titlesAnime1{
            0%{transform: translateY(-7px);visibility: visible}
            100%{transform: translateY(3px);visibility: visible}
        }
        .capSubTitle{
            visibility: hidden;
            animation-name: titlesAnime1;
            animation-fill-mode: forwards;
            animation-delay: 0.5s;
            animation-duration: 0.8s;
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
        <h1 class="title">Add New Job</h1>
        <hr class="titleHr">
    </div>
    <div class="textFields">
        <form action="Jobfinder.php" class="details" method="POST">
           <input type="text" class="txtBox inp" placeholder="Title" name="title"><br>
            <select class="catDropDown inp" name="drop">
                <option value="Electrician">Electrician</option>
                <option value="Sales">Sales</option>
                <option value="Marketing">Marketing</option>
                <option value="Software">Software</option>
            </select><br>
              <input type="text" class="salary inp" placeholder="Salary" name="salary"><br>
            <input type="text" class="wh inp" placeholder="Working Hours" name="whours"><br>
            <!-- <input type="text" class="vacancies inp" placeholder="Vacancies"><br>-->
            <input type="text" class="emp inp" placeholder="Employer" name="employe"><br>
            <input type="text" class="tn inp" placeholder="T.N" name="tn"><br>
             <input type="text" class="adress inp" placeholder="Adress" name="adress"><br>
             <input type="text" class="email inp" placeholder="E-Mail" name="email"><br>
             <input type="text" class="vacations inp" placeholder="Vacations" name="vacation"><br>
            <input type="text" class="Descriptions inp" placeholder="Descriptions" name="desc"><br>
            <button class="submitBtn" name="submitbtn"> Submit </button>
        </form>
        <div class="captionDiv">
            <h1 class="capTitle tl">Job Opatunities</h1>
            <h3 class="capSubTitle tl">How to add and how to register ?</h3>
            <p class="capDet tl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuriesLorem <br><br>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
        </div>
    </div>
</body>

</html>