<?php 

include 'Dbconnect.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            height: 100vh;
            background: url(PlantsatworkWeekimage2.jpg);
            /*background: linear-gradient(to bottom right, #ff69b4 0%, #cc0066 61%); */
            background-size: 110%,110%;
            overflow: hidden;
            
        }
        #main {
            
            width: 500px;
            height: 500px;
            border-radius: 10px;
          /*  background-color: rgba(54,55,55,0.1);*/
                background: linear-gradient(to bottom right, #666633 -28%, #ffffff 92%);

           
            margin-left: 400px;
            margin-top: 60px;
            transition: 0.5s;
            float: left;
            box-shadow: 10px 10px 5px grey;
        }
        #side {
            position: absolute;
            border: 1px solid black; 
            float: left;
            margin-left: 910px; 
            
          /*  border-top: 500px solid transparent ;      
            border-left: 100px  transparent;
            border-right: 400px solid blue;
            */
            height: 200px;
            width: 500px;
            background-color: white;
            border-radius: 100px;
            
            
        }
        h1 {
            text-align: center;
            margin-top: -1%;
        }
        #un,#pw {
            padding: 5px;
            margin-left: 120px;
            border: none;
            border-bottom: 1px solid black;
            background-color: rgba(14,54,255,0.0);
            transition: 0.2s;
        }
        #un:hover
        {
            transform: scale(1.1);
        }
         #pw:hover
        {
            transform: scale(1.1);
        }
        #login {
            width: 250px;
            height: 30px;
            margin-left: 120px;
            border-radius: 10px;
            border-style: none;
            margin-bottom: 60px;
             background: linear-gradient(to bottom right, #006600 14%, #33cc33 71%);

            transition: 0.2s;
            color: wheat;
        }
        a {
            margin-left: 120px;
            line-height: 1.5;
            text-decoration: none;
            color: black;
            font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
            display: block;
            margin-top: 0px;
            transition: 0.3s;
            
            
        }
        @keyframes slider {
            0% {transform: translateY(-600px)}
            60%{transform: translateY(115px)}
            75% {transform: translateY(100px)}
            100% {transform: translateY(115px)}
        }
        @keyframes leaveSlider {
            0%{transform: translateY(140px)};
            20% {transform: translateY(150px)}
            100% {transform: translateY(-600px)}
        }
        a:hover {
            transform: scale(1.1);
        }
        form{
            /*border: 1px solid;*/
            height: 38vh;
        }
    </style>
</head>

<body>
   <audio >
      <source src="videoplayback (1)(mp3)(mp3).mp3" type="audio/ogg">
   </audio>
    <div id="main">
        <br><br><br>
        <h1>Signup</h1>
        <form action="Signup.php" method="POST">
            <input type="text" id="un" placeholder="Username" name="uname" size="30"><br><br>
            <input type="password" id="pw" placeholder="Password" name="pass" size="30">
            <br><br>
            <input type="password" id="pw" placeholder="Re-Enter Password" size="30">
            <br><br>
            <input type="text" id="pw" placeholder="E-Mail" name="email" size="30">
            <br>
            <br>
            <br>
            <input type="submit" id="login" name="signupsubmit" value="Signup">
        </form>
        <a href="">fogot password ?</a>
        <br>
        <a href="Login.php">login</a>
        <br>
        <a href="Home.php">Home</a>
       
    </div>

    <script src="jquery-3.3.1.js"> </script>
    <script>
        $(document).ready(function() {
            
         /*   $('body').click(function(e)
            {
                var xCor = (e.pageX);
                var yCor = (e.pageY);
                alert("x cor is : " + xCor + " Y cor is : " + yCor);
            });
            */
            
            $('body').mousemove(function(event)
            {
                var x = (event.pageX * -1/30);
                var y = (event.pageY * -1/30);
                $(this).css("background-position",x + "px " + y + "px" );
            });
         
            $("#main").mouseenter(function() {
                
             
                
                $("#main").css({
                    "transform": "perspective(2000px)rotateY(20deg)",
                    "border-style": "none"    
                });
         /*
            $("#side").css({"animation-name":"slider" , "animation-duration":"1s","animation-fill-mode":"forwards"});
                  $("#side").show();
                   */
                

            });
           
            
            $("#main").mouseleave(function() {
                $("#main").css({"transform": "scale(1)",
                                "border-style":"none",
                                 "background-color": "rgba(54,55,55,0.1)"
                });
               
                /*
                   $("#side").css({"animation-name":"leaveSlider" , "animation-duration":"0.8s","animation-fill-mode":"forwards"});
                   */
                  

            });
               $("#login").mouseenter(function() {
                $("#login").css({"transform": "scale(1.1)"
                               
                               });
                             

            });
                 $("#login").mouseleave(function() {
                $("#login").css({"transform": "scale(1)"
                               
                               });
                             

            });
        });
    </script>
</body>

</html>
