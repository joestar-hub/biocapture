<?php 
require("connected.php");

if(isset($_GET["candidate"]))
{
$fname=$_GET["candidate"];


$thp=mysqli_query($connect,"SELECT * FROM records WHERE jambno='$fname'");



?>
<!DOCTYPE html>
<html lang="zxx">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/remixicon.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/fancybox.css">
<link rel="stylesheet" href="assets/css/jquery-ui-min.css">
<link rel="stylesheet" href="assets/css/aos.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/dark-theme.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<title>IMO STATE UNIVERSITY OWERRI</title>
<style>
    *{
        font-size:14px;
    }
    if($ty["verify_status"]=="yes"){
    echo "<center><h1 class='alert alert-danger'>This Jamb Number has been used</h1></center>";
    die();
    }
    
</style>
<link rel="icon" type="image/png" href="image/logo.jpg">
</head>
<body>
 

<div class="">
 


<section class="Login-wrap">
<div class="">
<div class="row">
   
<div class="col-lg-8">
<div class="login-form-wrap">
    <center style="margin-left:80px;"><img src="topimsu.jpg" style="width:909px;hieght:34px"/></center>
    <section style="margin-left:100px" class="">
        
<table class="table">
<thead>
<th></th>
<th></th>
</thead>
<?php



while($ty=mysqli_fetch_assoc($thp))
{ 

?>




<tbody>
 
 
<tr style="float:right">
<td></td>
<td><img  style="height:100px;width:90px;border:black solid 2px;border-radius:2px" src="<?php echo $ty["passport"]; ?>" style=""/></td>
</tr>
 
 
<tr>
<td>Name:</td>
<td><strong><?php echo $ty["name"]; ?></strong></td>
</tr>
<tr>
<td>Sex:</td>
<td><strong><?php echo $ty["sex"]; ?></strong></td>
</tr>
<tr>
<td>Jamb Reg. No:</td>
<td><strong><?php echo $ty["jambno"]; ?></strong></td>
</tr>
<tr>
<td>State of Origin:</td>
<td><strong><?php echo $ty["state"]; ?></strong></td>
</tr>
<tr>
<td>LGA:</td>
<td><strong><?php echo $ty["lga"]; ?></strong></td>
</tr>
<tr>
<td>Date of Birth:</td>
<td><strong><?php echo $ty["dob"]; ?></strong></td>
</tr>
<tr>
<td>Phone number:</td>
<td><strong><?php echo $ty["phone"]; ?></strong></td>
</tr>


<tr>
<td>Session:</td>
<td><strong><?php echo $ty["session"]; ?></strong></td>
</tr>
<tr>
<td>Mode of Admission</td>
<td><strong><?php echo $ty["admis_mode"]; ?></strong></td>
</tr>

<tr>
<td>Faculty:</td>
<td><strong><?php echo $ty["faculty"]; ?></strong></td>
</tr>

<tr>
<td>Department:</td>
<td><strong><?php echo $ty["depart"]; ?></strong></td>
</tr>


<tr>
<td>Matric no:</td>
<td><strong><?php echo $ty["matric_no"]; ?></strong></td>
</tr>


<form  method="post" action="paper2.php">
<tr>
<td>Email:</td>
<td><strong><?php echo $ty["email"]; ?></strong></td>
</tr>

<tr>
<td>Contact:</td>
<td><strong><?php echo $ty["contact_address"]; ?></strong></td>
</tr>


<tr>
<td>Next of kin:</td>
<td><strong><?php echo $ty["next_of_kin_name"]; ?></strong></td>
</tr>


<tr>
<td>Phone Number:</td>
<td><strong><?php echo $ty["next_of_kin_no"]; ?></strong></td>
</tr>


<tr>
<td>Student's Blood Group:</td>
<td><strong><?php echo $ty["blood_group"]; ?></strong></td>
</tr>


</tbody>
<?php
}

?>
</table>
</section>
<center>
     <img style='width:80px;height:80px' src="mj.png"/>
     </br>
     <strong>Dean of student</strong>
     </br>
       <strong>(Prof.Philip Ogbonna)</strong>
    
    
    
</center>
<center>
<button type="button" onclick="window.print();" class="btn btn-danger">PRINT</button>
</center>
</form>

</div>
</div>
 <!--<div class="col-lg-4"><img style='width:400px;height:400px' src="eye.jpg"/></div>-->
<div class="col-md-12 text-center">
<!--<p class="mb-0">Don’t Have an Account? <a class="link style1" href="register.html">Create One</a></p>-->
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>

 


<a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery-ui-min.js"></script>
<script src="assets/js/fancybox.js"></script>
<script src="assets/js/mixitup.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/tweenmax.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>



<?php


}
?>