<?php

require "include/config.php";
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= APP_NAME ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
	<script src="main.js"></script>
    <?php
    include "css.php"; ?>
    <?php
include "header.php"; ?>
</head>

<body>

<!--cards-->
<div class="container1" style="margin-top: -5em;">
        <style>
            .container1 {
                 position: absolute;
                 width: 100%;
                 height: 100vh;
            }
             .card {
                 width: 60%;
                 height: 94%;
                 max-height: 400px;
                 padding: auto;
                 text-align: center;
                 background: #D0A9F5;
                 border-radius: 10px;
            }
             .card__container {
                 display: grid;
                 width: 100%;
                 height: 100%;
                 grid-template-columns: 1fr 1fr 1fr;
                 align-items: center;
                 justify-items: center;
                 color: white;
            }
             .card__content {
                 width: 90%;
                 height: 90%;
                 background: #D0A9F5;
                 margin: 5px auto;
                 border-radius: 5px;
                 padding: 5px;
                 cursor: pointer;
                 box-shadow: -10px -10px 24px #BE81F7;
                 transition: 0.3s all ease-in-out;
            }
             .card__content:hover {
                 margin-top: -10px;
            }
             .card__header {
                 padding-top: -2em;
                 font-size: 15px;
                 margin: 40px auto;
                 font-weight: 2em;
            }
             .card__button {
                 padding: 10px;
                 border-radius: 50px;
                 background: #1f75c4;
                 color: white;
                 font-weight: bold;
                 cursor: pointer;
                 border: none;
                 margin: 50px auto;
            }

        </style>
  <div class="card__container">
    <div class="card">
      <div class="card__content">
        <h3 class="card__header">Not everyone should be a social entrepreneur</h3>
        <p class="card__info">Not just from those applying for social entrepreneurship fellowship, but from high school students, and young professionals.</p>
        <a href="https://hbr.org/2012/07/not-everyone-should-be-a-socia">
          <button class="card__button">Link</button>
          </a>
      </div>
    </div>
    <div class="card">
      <div class="card__content">
        <h3 class="card__header">What is Social Entrepreneurship?</h3>
        <p class="card__info">Learn more about how social entrepreneurship differs from more traditional types of entrepreneurship in a couple of important ways.</p>
          <a href="https://www.indeed.com/career-advice/career-development/social-enterpreneurship?utm_campaign=earnedsocial%3Acareerguide%3Asharedirectshare%3AUS&utm_content=What%20Is%20Social%20Entrepreneurship%3F&utm_medium=social&utm_source=directshare">
          <button class="card__button">Link</button>
          </a>
      </div>
    </div>
    <div class="card">
      <div class="card__content">
        <h3 class="card__header">How To Create a Business Plan for a Small Business </h3>
        <p class="card__info">Creating a business plan can help determine the steps necessary to achieve a business' goals.</p>
          <a href="https://www.indeed.com/career-advice/starting-new-job/business-plan-for-small-business?utm_campaign=earnedsocial%3Acareerguide%3Asharedirectshare%3AUS&utm_content=How%20To%20Create%20a%20Business%20Plan%20for%20a%20Small%20Business%20%28With%20Example%29&utm_medium=social&utm_source=directshare">
          <button class="card__button">Link</button>
          </a>
      </div>
    </div>
  </div>
 <div class="card__container" style="margin-top: -13em; ">
    <div class="card">
      <div class="card__content">
        <h3 class="card__header">Innovative Entrepreneurship</h3>
        <p class="card__info">Innovative entrepreneurship can provide ideas that help grow new and existing businesses, develop products to improve local communities.</p>
          <a href="https://hbr.org/2010/09/entrepreneurship-as-disease">
          <button class="card__button">Link</button>
          </a>
      </div>
    </div>
    <div class="card">
      <div class="card__content">
        <h3 class="card__header">Find Joy in Any Job: How Do I Improve the Role I Have?</h3>
        <p class="card__info">A lot of us are feeling unhappy and disengaged at work – and that started long before the pandemic.</p>
          <a href="https://hbr.org/podcast/2022/04/find-joy-in-any-job-how-do-i-improve-the-role-i-have">
          <button class="card__button">Link</button>
          </a>
      </div>
    </div>
    <div class="card">
      <div class="card__content" >
        <h3 class="card__header">Making Quantum Computing a Reality</h3>
        <p class="card__info">While quantum computers exist in the lab, general-purpose quantum computers aren’t yet available for commercial use.</p>
          <a href="https://hbr.org/2022/04/making-quantum-computing-a-reality">
          <button class="card__button">Link</button>
          </a>  
      </div>
    </div>
  </div>


<!-- Modal forum-->
    <div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
      <style>
            .panel-body h3{
                font-size: 30px;
            }
        .form-group{
            font-size: 18px;
        }
        .form-control{
            font-size: 20px;
        }
          .modal-dialog {
              margin-top: 15em;
          }
         
    </style>

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button"  class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply to the Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        <div class="form-group">
         <label for="usr">Your name:</label>
         <textarea type="text" class="form-control" name="Rname" required></textarea>
        </div>
            <div class="form-group">
              <label for="comment">Your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
   
</div>
   

<div class=container>
    <style>
            .panel-body h3{
                font-size: 30px;
            }
        .form-group{
            font-size: 18px;
        }
        .form-control{
            font-size: 20px;
        }
    </style>
   
<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Entrepreneurship forum</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
<div class="form-group">
 <label for="usr">Your name:</label>
<!--  <input type="text" class="form-control" rows="2" name="name" required>-->
        <textarea type="text" class="form-control" name="name" required></textarea>
</div>
    <div class="form-group">
      <label for="comment">What's your Question?:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
<input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
 

<div class="panel panel-default">
    
  <div class="panel-body">
    <h4>Recent questions</h4>          
<table class="table" id="MyTable" style="background-color: #999999; color: black; border:0px; border-radius:10px">
 <tbody id="record" >

 </tbody>
</table>
  </div>
</div>

</div>


<?php
include "footer.php"; ?>

<!-- JS here -->

<?php
include "js.php"; ?>

</body>
</html>
