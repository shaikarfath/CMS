<?php

require "include/config.php";
session_start();
$id = $_GET['id'];
$q = "SELECT * FROM `jobs` WHERE id=$id";
$job = $db->find_data($q);
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= APP_NAME ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include "css.php"; ?>
</head>

<body>
<?php
include "header.php"; ?>
<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
             data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?= $job->title ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="javascript:;">
                                    <h4><?= $job->title ?></h4>
                                </a>
                                <ul>
                                    <li><?= $job->company_name ?></li>
                                    <li><i class="fas fa-map-marker-alt"></i><?= $job->location ?></li>
                                    <li><?= $job->salary ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- job single End -->

                    <div class="job-post-details">
                        <?= $job->description ?>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Overview</h4>
                        </div>
                        <ul>
                            <li>Posted date : <span><?= $job->posted_date ?></span></li>
                            <li>Location : <span><?= $job->location ?></span></li>
                            <li>Vacancy : <span><?= $job->vacancy ?></span></li>
                            <li>Job nature : <span><?= $job->job_nature ?></span></li>
                            <li>Salary : <span><?= $job->salary ?></span></li>
                            <li>Application date : <span><?= $job->application_date ?></span></li>
                        </ul>
                        <div class="apply-btn2">
                            <!--<a href="#" class="btn">Apply Now</a>-->
                        </div>
                    </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Company Information</h4>
                        </div>
                        <span><?= $job->company_name ?></span>
                        <p><?= $job->company_description ?></p>
                        <ul>
                            <li>Name: <span><?= $job->company_name ?> </span></li>
                            <li>Web : <span> <?= $job->company_web ?></span></li>
                            <li>Email: <span><?= $job->company_email ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->

</main>
<?php
include "footer.php"; ?>

<!-- JS here -->

<?php
include "js.php"; ?>

</body>
</html>
