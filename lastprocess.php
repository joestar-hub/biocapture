<?php
require("connected.php");


//print_r($_POST);



if(isset($_POST["angle"]))
{
    
    //check if matric number exist
    
    $h=$_POST["metricno"];
    $ura=mysqli_query($connect,"SELECT * FROM records WHERE matric_no='$h'");
    if(mysqli_num_rows($ura)>0){
        echo "<h1>This matriculation has already been used</h1>";
        die();
    }
    
    
    
    
    
    
    if(!isset($_POST["image_data"])||!isset($_POST["jambno"] )||isset($_POST["metricno"])){
        
        echo "Not receiving from form";
    }
$captured=$_POST["image_data"];
$jambno=$_POST["jambno"];
$metricno=$_POST["metricno"];

mysqli_query($connect,"UPDATE records SET `matric_no`='$metricno',`passport`='$captured',`verify_status`='yes' WHERE `jambno`='$jambno'");

if(mysqli_affected_rows($connect))
{
    header("location:preview.php?candidate=".$jambno);
}
}






























?>