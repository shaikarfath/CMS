<?php
include_once("config.php");
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
    $salary=$_POST['salary'];
    $link=$_POST['link'];
    $description=$_POST['description'];
    $posted_date=$_POST['posted_date'];
	 $location=$_POST['location'];
     $vacancy=$_POST['vacancy'];
    echo  $job_nature=$_POST['job_nature'];
     $application_date=$_POST['application_date'];
      $company_name=$_POST['company_name'];
     $company_web=$_POST['company_web'];
     $company_email=$_POST['company_email'];
     $company_description=$_POST['company_description'];
      //$company_logo=$_POST['company_logo'];
	 $query=mysqli_query($con,"insert into jobs(title,salary,link,description,posted_date,location,vacancy,job_nature,application_date,company_name,company_web,company_email,company_description) values('$title','$salary','$link','$description','$posted_date','$location','$vacancy','$job_nature','$application_date','$company_name','$company_web','$company_email','$company_description')");
	if($query)
	{
	echo "<script>alert('Job added successfully');</script>";
	}
	else
	{
		echo "<script>alert('Data not inserted');</script>";
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Post new job</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>

<div class="container-fluid">
<div class="col-sm-3"></div>
  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3>Post a new job</h3>
		<hr >
		<form name="insert" action="" method="post">
     <table width="100%"  border="0">
    <tr>
    <th height="62" scope="row">Name </th>
    <td width="71%">
        <input type="text" placeholder="Job Title" name="title" id="title" value=""  class="form-control" required/>
        </td>
  </tr>  
  <tr>
    <th height="62" scope="row">Yearly Salary</th>
    <td width="71%">
        <input type="text" placeholder="Yearly Salary" name="salary" id="salary" value=""  class="form-control" required />
      </td>
  </tr>
  <tr>
    <th height="62" scope="row">Job Link</th>
    <td width="71%">
        <input type="text" placeholder="Job Link" name="link" id="link" value=""  class="form-control" maxlength="100" required /></td>
  </tr>
  
 <tr>
    <th height="62" scope="row">Job Description</th>
    <td width="71%">
        <input type="text" placeholder="Job Description" name="description" id="description" value=""  class="form-control" maxlength="100" required /></td>
  </tr>
          <tr>
    <th height="62" scope="row">Posted Date</th>
    <td width="71%">
        <input type="text" placeholder="Job Description" name="posted_date" id="posted_date" value=""  class="form-control" maxlength="100" required /></td>
  </tr>
          <tr>
    <th height="62" scope="row">Location</th>
    <td width="71%">
        <input type="text" placeholder="Job Location" name="location" id="location" value=""  class="form-control" maxlength="100" required /></td>
  </tr>
          <tr>
    <th height="62" scope="row">Vacancy</th>
    <td width="71%">
        <input type="number" min="1" max="100" placeholder="Total Vacancy" name="vacancy" id="vacancy" value=""  class="form-control" maxlength="100" required /></td>
  </tr>
         
         <!--
          <tr>
    <th height="62" scope="row">Job Nature</th>
    <td width="71%">
        <input type="text" placeholder="Job Nature" name="job_nature" id="job_nature" value=""  class="form-control" maxlength="100" required /></td>           
  </tr>
        --> 
          <tr>
    <th height="62" scope="row">Job Nature</th>
    <td width="71%">
       
          <select class="form-control" name="job_nature" id="job_nature">
    <option value="Full Time">Full Time</option>
    <option value="Part Time">Part time</option>
    <option value="internship">internship</option>
    <option value="Freelancer">Freelancer</option>
  </select>    
                   
              
              
  </tr>
         
          
         
         
         
     <tr>
    <th height="62" scope="row">Application Date</th>
    <td width="71%">
        <input type="date" placeholder="Application Date" name="application_date" id="application_date" value=""  class="form-control" maxlength="100" required /></td>
  </tr>   
         
         <tr>
    <th height="62" scope="row">Company Name</th>
    <td width="71%">
        <input type="text" placeholder="Company Name" name="company_name" id="company_name" value=""  class="form-control" maxlength="100" required /></td>
  </tr>
           <tr>
    <th height="62" scope="row">Company Web</th>
    <td width="71%">
        <input type="text" placeholder="Company Web" name="company_web" id="company_web" value=""  class="form-control" maxlength="100" required /></td>
  </tr>
           <tr>
    <th height="62" scope="row">Company Email</th>
    <td width="71%">
        <input type="email" placeholder="Company Email" name="company_email" id="company_email" value=""  class="form-control" maxlength="100" required /></td>
  </tr>
           <tr>
    <th height="62" scope="row">Company Description</th>
    <td width="71%">
       
               <textarea name="company_description" id="company_description" value="" class="form-control"  required></textarea>
               </td>
  </tr>
          <!--
          <tr>
    <th height="62" scope="row">Company Logo</th>
    <td width="71%">
        <input type="text" placeholder="Company Logo" name="company_logo" id="company_logo" value=""  class="form-control" maxlength="100" required /></td>
  </tr> 
         -->
 <tr>
    <th height="62" scope="row"></th>
    <td width="71%">
        <input type="submit" name="submit" value="Submit" class="btn-group-sm" /> </td>
  </tr>
</table>
 </form>

      </div>
    </div>
    <hr>
        
   
  </div><!--/center-->
<div class="col-sm-3"></div>
 
<!--/right-->
  <hr>
</div><!--/container-fluid-->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>