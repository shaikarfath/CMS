<?php

require "include/config.php";
session_start();
$title = isset($_GET['title']) && !empty(trim($_GET['title'])) ? $_GET['title'] : '';
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
                            <h2>Get your job</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                                <div class="ion">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20px" height="12px">
                                        <path fill-rule="evenodd" fill="rgb(27, 207, 107)"
                                              d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                    </svg>
                                </div>
                                <h4>Filter Jobs</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Job Category Listing start -->
                    <div class="job-category-listing mb-50">
                        <!-- single one -->
                        <div class="single-listing">
                            <div class="small-section-tittle2">
                                <!--                                <h4>Job Category</h4>-->
                            </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <!--<select name="select">
                                    <option value="">All Category</option>
                                    <option value="">Category 1</option>
                                    <option value="">Category 2</option>
                                    <option value="">Category 3</option>
                                    <option value="">Category 4</option>
                                </select>-->
                            </div>
                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Job Type</h4>
                                </div>
                                
                                <label class="container">Campus Full Time
                                    <input class="checkbox" 
                                           type="checkbox"
                                           value="CSU Full Time"
                                           checked="checked active"
                                           name="checkbox[]">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Campus Part Time
                                    <input class="checkbox"
                                           type="checkbox"
                                           value="CSU Part Time"
                                           name="checkbox[]">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Campus Co-Ops
                                    <input class="checkbox"
                                           type="checkbox"
                                           value="CSU Co-Ops"
                                           name="checkbox[]">
                                    <span class="checkmark"></span>
                                </label>
                                
                                <label class="container">Campus internships
                                    <input class="checkbox"
                                           type="checkbox"
                                           value="CSU internships"
                                           name="checkbox[]">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Campus Entry Level
                                    <input class="checkbox"
                                           type="checkbox"
                                           value="CSU Entry Level Jobs"
                                           name="checkbox[]">
                                    <span class="checkmark"></span>
                                </label>
                                </br>
                                <h4>External Resources</h4>
                            </br>
                                <label class="container">External Full Time
                                    <input class="checkbox" 
                                           type="checkbox"
                                           value="Full Time"
                                           name="checkbox[]">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">External Part Time
                                    <input class="checkbox"
                                           type="checkbox"
                                           value="Part Time"
                                           name="checkbox[]">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">External Remote
                                    <input class="checkbox"
                                           type="checkbox"
                                           value="Remote"
                                           name="checkbox[]">
                                    <span class="checkmark"></span>
                                </label>
                                
                                <label class="container">External internship
                                    <input class="checkbox"
                                           type="checkbox"
                                           value="internship"
                                           name="checkbox[]">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <!-- single two -->
                        <div class="single-listing">
                            <!--<div class="small-section-tittle2">
                                <h4>Job Location</h4>
                            </div>-->
                            <!-- Select job items start -->
                            <!--<div class="select-job-items2">
                                <select name="select">
                                    <option value="">Anywhere</option>
                                    <option value="">Category 1</option>
                                    <option value="">Category 2</option>
                                    <option value="">Category 3</option>
                                    <option value="">Category 4</option>
                                </select>
                            </div>-->
                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            <!--<div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Experience</h4>
                                </div>
                                <label class="container">1-2 Years
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">2-3 Years
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">3-6 Years
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">6-more..
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>-->
                            <!-- select-Categories End -->
                        </div>
                        <!-- single three -->
                        <div class="single-listing">
                            <!-- select-Categories start -->
                            <!--<div class="select-Categories pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Posted Within</h4>
                                </div>
                                <label class="container">Any
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Today
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 2 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 3 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 5 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 10 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>-->
                            <!-- select-Categories End -->
                        </div>
                        <div class="single-listing">
                            <!-- Range Slider Start -->
                            <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                                <div class="small-section-tittle2">
                                    <!--                                    <h4>Filter Jobs</h4>-->
                                </div>
                                <div class="widgets_inner">
                                    <div class="range_item">
                                        <!-- <div id="slider-range"></div> -->
                                        <!--                                        <input type="text" class="js-range-slider" value=""/>-->
                                        <!-- <div class="d-flex align-items-center">
                                             <div class="price_text">
                                                 <p>Price :</p>
                                             </div>
                                             <div class="price_value d-flex justify-content-center">
                                                 <input type="text" class="js-input-from" id="amount" readonly/>
                                                 <span>to</span>
                                                 <input type="text" class="js-input-to" id="amount" readonly/>
                                             </div>
                                         </div>-->
                                    </div>
                                </div>
                            </aside>
                            <!-- Range Slider End -->
                        </div>
                    </div>
                    <!-- Job Category Listing End -->
                </div>
                <!-- Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="count-job mb-35">
                                        <span><input type="text" class="form-control"
                                                     name="title"
                                                     id="title"
                                                     placeholder="Search Job"/></span>
                                        <!-- Select job items start -->
                                        <div class="select-job-items">
                                            <span>Sort by</span>
                                            <select name="select" id="sort_by">
                                                <option value="">None</option>
                                                <option value="title">Title</option>
                                                <option value="id">Latest</option>
                                            </select>
                                        </div>
                                        <!--  Select job items End-->
                                    </div>
                                </div>
                            </div>
                            <!-- Count of Job list End -->
                            <div id="jobs_div">

                            </div>
                        </div>
                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->
    <!--Pagination Start  -->
    <!--<div class="pagination-area pb-115 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--Pagination End  -->

</main>
<?php
include "footer.php"; ?>

<!-- JS here -->

<?php
include "js.php"; ?>
<script>
    $(document).ready(function () {
        getJobs();

        $('input[name="checkbox[]"]').on('click', function () {
            var checkedNum = $('input[name="checkbox[]"]:checked').length;
            if (!checkedNum) {
                return false;
            }
            getJobs();
        });

        $('#sort_by').on('change', function () {
            getJobs();
        });
        $('#title').on('keyup', function () {
            getJobs();
        });
        $('#title').on('keydown', function () {
            getJobs();
        });

    })

    function getJobs() {
        var title = "<?=$title?>";
        var search_title = $('#title').val();
        if (search_title !== '') {
            title = search_title;
        }
        var checkbox = [];
        $('input[name="checkbox[]"]:checked').each(function () {
            checkbox.push($(this).val());
        });
        var sort_by = $('#sort_by').val();
        console.log(checkbox)
        $.ajax({
            type: 'POST',
            url: "ajax/jobs_ajax.php",
            data: {
                title: title,
                checkbox: checkbox,
                sort_by: sort_by
            },
            beforeSend: function () {
                //loader();
            },
            success: function (response) {
                $('#jobs_div').html(response);
            },
            error: function (xhr, error, status) {
                var response = xhr.responseJSON;
                //console.log(response);
            }
        });
    }
</script>
</body>
</html>
