<?php include 'DbConnect.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Q&A</title>




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

      .container{
    width: 100%;
    margin: 0 auto;
    overflow: auto;
    background-color: lightseagreen;}

        
        
    </style>



        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body style="background-image: url(QnAIm.jpg);">


        <div class="hedding">
        <a href="Home.php" class="home nav">Home</a>
        <a href="jobFinderAdd.php" class="addJob nav">Add job</a>
        <a href="jobFinderSearsh.php" class="findJob nav">Find Job</a>
        <a href="QnA.php" class="QnA nav">Q&A</a>
        <a href="Login.php" class="login nav">Log in</a>
        

    </div>






        <header>
            <div class="container">
                <h1 class="title">Q&A</h1>
                  <hr class="titleHr">
            </div>
        </header>
        <main>
           <h2>This is a multiple choice quize and questions for know about your opinion.</h2>
           <form action="QAdd.php" method="post"  >
            <p>1. Are you satisfied with this web page?</p>
            <input name="q1" type="hidden" value=1 />
                <ul class="choices">
                    <li><input name="choice1" type="radio" value="YES" />YES</li>
                    <li><input name="choice1" type="radio" value="NO" />NO</li>
                </ul>
            
            <p>2. How did you find out about this web site?</p>
            <input name="q2" type="hidden" value=2 />
                <ul class="choices">
                    <li><input name="choice2"type="radio"value="I heard about it from a friend" />I heard about it from a friend </li>
                    <li><input name="choice2"type="radio"value="From a leaflet" />From a leaflet</li>
                    <li><input name="choice2"type="radio"value="From the Internet" />From the Internet</li>
                    <li><input name="choice2"type="radio"value="From a television ad" />From a television ad</li>
                </ul>
            
            <p>3. Did you find what you were looking for on this site? </p>
            <input name="q3" type="hidden" value=3 />
                <ul class="choices">
                    <li><input name="choice3"type="radio"value="YES" />YES</li>
                    <li><input name="choice3"type="radio"value="NO" />NO</li>
                </ul>
            
            <p>4. Would you recommend this site to someone else?</p>
            <input name="q4" type="hidden" value=4/>
                <ul class="choices">
                    <li><input name="choice4"type="radio"value="YES" />YES</li>
                    <li><input name="choice4"type="radio"value="NO" />NO</li>
                </ul>
            
            <p>5. What are the things that should be add to this site?</p>
            <input name="q5" type="hidden" value=5 />
                <ul class="choices">
                    <li><input type="text" name="ans" /></li>
                    
                </ul>
                <button class="submitbtn" type="submit" name="submitbtn"> Submit </button>
            </form>
        </main>

        <footer>
             <div class="container" style="margin-top: 35px;">
                 Copyright &copy; 2019..
             </div>     
        </footer>
    </body>
</html>