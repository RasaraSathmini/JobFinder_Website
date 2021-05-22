<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="destiCSSNew.css">
</head>

<body>
    <div class="MAIN">
        <div class="main1">
            <div class="subMain1">

            </div>
        </div>
        <div class="heddingMain">
            <div class="hParaLeft hPara">
                <strong>
                    <p class="hedding travel ">Job </p>
                </strong>
            </div>
            <div class="hParaRight hPara">
                <strong>
                    <p class="hedding des">Finder</p>
                </strong>
            </div>

        </div>
        <div class="subMain1P1">
            <div class="nav">
                <p class="sname">government Approved</p>
                <strong>
                    <div class="navHover">
                        <p class="home nabBtn">Home</p>
                    </div>

                    <div class="navHover">
                        <p class="bp nabBtn">Add job</p>
                    </div>

                    <div class="navHover">
                        <p class="projects nabBtn">Find Job</p>
                    </div>

                    <div class="navHover">
                        <p class="qu nabBtn">Q&A</p>
                    </div>    
                    
                    <div class="navHover">
                        <p class="contact nabBtn">Login</p>
                    </div>
                </strong>
            </div>
            <div class="rest">
                <p class="trvSl">Find a Job in</p>
                <p class="sl">Sri Lanka</p>
            </div>
        </div>
        <br><br>
        <div class="main2 top">
            <p class="hedCheck">Engineers </p>
            <p class="restCheck">Lorem Ipsum is simply dummy text of <br>the printing and typesetting <br>industry. text ever sispecimen bookever sispecimen book.</p>
            <button class="btnRm">Read More ..</button>
            
        </div>
        <br><br>
        <div class="main3">
            <div class="wlPic1 wpic pic">

            </div>
            <div class="wlPic2 wpic pic">

            </div>
            <div class="wlPic3 wpic pic">

            </div>
            <div class="wlPic4 wpic pic">

            </div>
            <div class="wlPic5 wpic pic">

            </div>
        </div>
        <div class="main4 top">
            <p class="hedCheck">Electricions </p>
            <p class="restCheck">Lorem Ipsum is simply dummy text of <br>the printing and typesetting <br>industry. text ever sispecimen bookever sispecimen book.</p>
            <button class="btnRm">Read More ..</button>
        </div>
        <br><br>
        <div class="main5">
            <div class="bPic1 wpic pic">

            </div>
            <div class="bPic2 wpic pic">

            </div>
            <div class="bPic3 wpic pic">

            </div>
            <div class="bPic4 wpic pic">

            </div>
            <div class="bPic5 wpic pic">

            </div>
        </div>

    </div>





    <script src="jquery-3.3.1.js"></script>
    <script>
        $(document).ready(function() {
            // ssssssssssssssssssssssssssssssssssssssssssssssssssssssss
            var corOne = 0;
            var corTwo = 1;
            $(".MAIN").scroll(function() {
                // scroll check up or down 

                var sp = $(this).scrollTop();

                corOne = corTwo;
                corTwo = sp;

                var scrollTriger;


                if (corOne < corTwo) {
                    // down 

                    scrollTriger = 0;
                } else {
                    // up

                    scrollTriger = 1;
                }

                // 1st frame anime ...
                if (sp > 75 && sp < 250) {
                    if (scrollTriger == 1) {
                        $(".subMain1P1").css({
                            "transform": "translateY(0px)"
                        });
                    }
                    else
                        {
                               $(".subMain1P1").css({
                            "transform": "translateY(-150px)"
                        });
                        }
                }


                // wild life pic anime ....
                if (sp > 800 && sp < 1000) {

                    if (scrollTriger == 1) {

                        $(".wlPic1").css({
                            "transition": "0.5s",
                            "transform": "translateY(0px)"
                        });
                         $(".wlPic2").css({
                            "transition": "0.6s",
                            "transform": "translateY(0px)"
                        });
                         $(".wlPic3").css({
                            "transition": "0.7s",
                            "transform": "translateY(0px)"
                        });
                         $(".wlPic4").css({
                            "transition": "0.8s",
                            "transform": "translateY(0px)"
                        });
                         $(".wlPic5").css({
                            "transition": "0.9s",
                            "transform": "translateY(0px)"
                        });


                    } else {

                        $(".wlPic1").css({
                            "transition": "0.5s",
                            "transform": "translateY(-130px)"
                        });
                          $(".wlPic2").css({
                            "transition": "0.65s",
                            "transform": "translateY(-130px)"
                        });
                          $(".wlPic3").css({
                            "transition": "0.8s",
                            "transform": "translateY(-130px)"
                        });
                          $(".wlPic4").css({
                            "transition": "0.95s",
                            "transform": "translateY(-130px)"
                        });
                          $(".wlPic5").css({
                            "transition": "1.5s",
                            "transform": "translateY(-130px)"
                        });
                    }
                    
                    
                    
                }
                
                // beaches anime
                if (sp > 1700 && sp < 1900) {

                    if (scrollTriger == 1) {

                        $(".bPic1").css({
                            "transition": "0.5s",
                            "transform": "translateY(0px)"
                        });
                         $(".bPic2").css({
                            "transition": "0.6s",
                            "transform": "translateY(0px)"
                        });
                         $(".bPic3").css({
                            "transition": "0.7s",
                            "transform": "translateY(0px)"
                        });
                         $(".bPic4").css({
                            "transition": "0.8s",
                            "transform": "translateY(0px)"
                        });
                         $(".bPic5").css({
                            "transition": "0.9s",
                            "transform": "translateY(0px)"
                        });


                    } else {

                        $(".bPic1").css({
                            "transition": "0.5s",
                            "transform": "translateY(-130px)"
                        });
                          $(".bPic2").css({
                            "transition": "0.65s",
                            "transform": "translateY(-130px)"
                        });
                          $(".bPic3").css({
                            "transition": "0.8s",
                            "transform": "translateY(-130px)"
                        });
                          $(".bPic4").css({
                            "transition": "0.95s",
                            "transform": "translateY(-130px)"
                        });
                          $(".bPic5").css({
                            "transition": "1.5s",
                            "transform": "translateY(-130px)"
                        });
                    }
                    
                    
                    
                }

            });
            //sssssssssssssssssssssssssssssssssssssssssssss
            
            // click functions
           $(".home").click(function(){
               window.location = "Login.php";
           });
             $(".bp").click(function(){
               window.location = "jobFinderAdd.php";
           });
             $(".projects").click(function(){
               window.location = "jobFinderSearsh.php";
           });
            $(".qu").click(function(){
             window.location = "QnA.php";
           });

             $(".contact").click(function(){
               window.location = "Login.php";
           });

        });
    </script>
</body></html>