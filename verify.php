<?php 
require("connected.php");

if(isset($_POST["verify"]))
{
$fname=$_POST["jambno"];
 

$ezra=mysqli_query($connect,"SELECT * FROM `records` WHERE `jambno`='$fname' AND`verify_status`='yes'");

if(mysqli_num_rows($ezra)==0|!$ezra){
    echo "
    
    <p class='alert alert-success'>You have not done Biometric Entry for this</p>
    ";
}
else
{
$_SESSION["login"]="yes";
header("location:preview.php?candidate=".$fname);

}




}



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
<title>IMO STATE UNIVERSITY</title>
<link rel="icon" type="image/png" href="image/logo.jpg">
</head>
<center style="margin-left:80px;"><img src="topimsu.jpg" style="width:909px;hieght:34px"/></center>
    <section style="margin-left:100px" class="">
<body>
<div class="content-wrapper">

<div class="container">
<div class="breadcrumb-title">
<h2</h2>
</div>
</div>
</div>


<section class="Login-wrap ptb-100">l
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="login-form-wrap">
<div class="login-header">
<h3>Verify Here</h3>
<p> </p>
</div>
<div class="login-form">
<div class="login-body">
<form method="post" class="form-wrap" action="">
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<input id="text" name="jambno" type="text" placeholder="Jamb Reg Number to verify" required="">
</div>
</div> 
<div class="col-lg-6 col-md-6 col-sm-6 col-6">
<div class="checkbox style3">
 
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end mb-20">
<!--<a href="recover-password.html" class="link style1">Forgot Password?</a>-->
</div>
<div class="col-lg-12">
<div class="form-group">
<button name="verify" class="btn style1">
Verify
</button>
</div>
</div>
<div class="col-md-12 text-center">
<!--<p class="mb-0">Don???t Have an Account? <a class="link style1" href="register.html">Create One</a></p>-->
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="login-img">
<img src="assets/img/register.png" alt="Image">
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