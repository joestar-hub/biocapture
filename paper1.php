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
<title>IMO STATE</title>
<link rel="icon" type="image/png" href="image/logo.jpg">
</head>
<body>
<?php 
require("connected.php");

if(isset($_POST["done"]))
{
$fname=$_POST["fname"]; 

$thp=mysqli_query($connect,"SELECT * FROM records WHERE jambno='$fname'");

while($ty=mysqli_fetch_assoc($thp))
{

if($ty["verify_status"]=="yes"){
    
    echo "<center><h1 class='alert alert-primary'>You have Enrolled this jamb number</h1></center>";
    die();
}
 


?>

 

<div class="" style="background:skyblue!important">
 


<section class="Login-wrap" style="background:skyblue!important">
<div class="" style="background:skyblue!important">
<div class="row">
<div class="col-lg-8">
<div class="login-form-wrap">
    <center class="mx-auto w-50"><img src="topimsu.jpg" style="width:900px"/></center>
    <section class="mx-auto w-50" class="">
<table class="table">
<thead>
<th></th>
<th></th>
</thead>
<?php
?>




<tbody>
 
<tr>
<td>Name:</td>
<td><strong><?php echo $ty["name"]; ?></strong></td>
</tr>
<tr>
<td>Sex:</td>
<td><strong><?php echo $ty["sex"]; ?></strong></td>
</tr>
<tr>
<td>Jamb Registration. No:</td>
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
<td>Faculty:</td>
<td><strong><?php echo $ty["faculty"]; ?></strong></td>
</tr>

<tr>
<td>Department:</td>
<td><strong><?php echo $ty["depart"]; ?></strong></td>
</tr>


<form  method="post" action="paper2.php">
<tr>
<td>Email:</td>
<td><strong><?php echo $ty["email"]; ?></strong></td>
</tr>
<tr>
<td>Contact Address:</td>
<td> 
<textarea name="address" class="form-control">
</textarea>
</td>
</tr>

<tr>
<td>Next of Kin:</td>
<td><input type="text" name="next_kin_name" placeholder="Next of Kin" class="form-control"/></td>
</tr>
<tr>
<td>Next of kin Phone no:</td>
<td>

<input type="text" name="next_kin_phone" placeholder="Next of Kin Phone"  class="form-control"/>


<input type="hidden" name="jambno" placeholder="" value="<?php echo $ty["jambno"]; ?>"  class="form-control"/>



</td>
</tr>
<tr>
<td>Blood Group:</td>
<td>
<select name="blood_group" class="form-control">
<option value="A">A</option>
<option value="B">B</option>
<option value="AB">AB</option>
<option value="O">O</option>
</select>
</td>
</tr>
<tr> 




</tbody>
<?php
}

?>
</table>
</section>
<center>
<button type="submit" name="develop" class="btn btn-danger">Submit</button>
</center>
</form>

</div>
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

<?PHP
}


?>
 