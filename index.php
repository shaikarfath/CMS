<?php

require "include/config.php";
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= APP_NAME ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include "css.php"; ?>
</head>

<body>

<?php
include "header.php"; ?>
<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center"
                 data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <h1 style="font-size: 3em;">Find jobs at Columbus State University and in Columbus and Atlanta Region.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </br>
        </br>
        </br>
        </br>
    </br>
    </br>
    </br>
             
    <div class="slider-area "> 
            <div class="hero" style=" padding-top: 0.5em; width:auto;">
                <h1>
                    <style>
                        h1 {
                            text-align: center;
                        }
                        h1 span{
                        transition: .5s linear;
                        }
                        h1:hover span:nth-child(1){
                          margin-right: 5px;
                        }
                        h1:hover span:nth-child(1):after{
                          content: "'";
                        }
                        h1:hover span:nth-child(2){
                          margin-left: 30px;
                        }
                        h1:hover span{
                        color: blue;
                        text-shadow: 0 0 10px #00008B,
                                     0 0 30px #00008B;
                        }
                    </style>
                    CShores CMS ( <span style="transition: .5s linear;">Career Management Systems</span> ) Project</h1>
                
                
                <p style="width: 85%; text-align: center; padding-left: 16em;">The CShores Career Management System is a tool to find jobs posted for CSU students and alumni, as well as to share business opportunities. You can use our search function to find jobs on-campus and off, and you can filter them to meet your needs and expectations. The Entrepreneurship Forum is a place to view business advice and opportunities and discuss with the CSU community. You may also use our Resume Builder to quickly create a slick resume tailored to the job you are interested in applying for.</p>

                <p style="width: 85%; text-align: center; padding-left: 16em;"> CShores is a group of Columbus State University students working in various tracks in the Computer Science field. Daniel, LaNaya, and Hugh are software engineering majors, while Kiran and Arfath are web development majors. Our variety of skills has made this project possible.</p>
            </div>          
            </br>
        </br>
        </br>
        </br>
    </br>
    </br>
    </br>
    </div>
                    

</main>
<?php
include "footer.php"; ?>

<!-- JS here -->

<?php
include "js.php"; ?>

</body>
</html>
