<?php
$address=$_POST["address"];
$next_kin_phone=$_POST["next_kin_phone"];
$next_kin_name=$_POST["next_kin_name"];
$blood_group=$_POST["blood_group"];
$jambno=$_POST["jambno"];

require("connected.php");
$ge=mysqli_query($connect,"

UPDATE `records` SET  `next_of_kin_name`='$next_kin_name',`next_of_kin_no`='$next_kin_phone',`blood_group`='$blood_group',`contact_address`='$address'
WHERE `jambno`='$jambno'");

if(mysqli_affected_rows($connect)){
    echo "<h1>Successfully Updated</h1>";
}
?>
<!-- Required library for webcam -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.24/webcam.js"></script>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- CSS --> 
<div class="container">	
  <div class="row">
	<div class="col-lg-6" align="center">
	 <form enctype="multipart/form-data" method="post" action="lastprocess.php">
	     
		<label>Capture live photo</label>
		<div id="my_camera" class="pre_capture_frame" ></div>
		
			
			<input type="text" name="metricno" class="form-control" placeholder="Please Insert Your Matriculation number">
			
			
		
		<input type="hidden" name="image_data" id="image_data">
		
			<input type="hidden" name="jambno" id="jambno" value="<?php  echo $jambno;  ?>">
			
		
		
		
		<br>
		<input type="button" class="btn btn-info btn-round btn-file" value="Take Snapshot" onClick="take_snapshot()">	
	</div>
	<div class="col-lg-6" align="center">
		<label>Result</label>
		<div id="results" >
			<img style="width: 350px;" class="after_capture_frame" src="userplace.png" />
		</div>
		<br>
		<button type="submit" class="btn btn-success" name="angle">Save Picture</button>
		</form>
	</div>	
	
  </div><!--  end row -->
</div><!-- end container -->
<script language="JavaScript">
	 // Configure a few settings and attach camera 250x187
	 Webcam.set({
	  width: 350,
	  height: 287,
	  image_format: 'jpeg',
	  jpeg_quality: 90
	 });	 
	 Webcam.attach( '#my_camera' );
	
	function take_snapshot() {
	 // play sound effect
	 //shutter.play();
	 // take snapshot and get image data
	 Webcam.snap( function(data_uri) {
	 // display results in page
	 document.getElementById('results').innerHTML = 
	  '<img class="after_capture_frame" src="'+data_uri+'"/>';
	 $("#image_data").val(data_uri);
	 });	 
	}

// 	function saveSnap(){
// 	var base64data = $("#captured_image_data").val();
// 	 $.ajax({
// 			type: "POST",
// 			dataType: "json",
// 			url: "capture_image_upload.php",
// 			data: {image: base64data},
// 			success: function(data) { 
// 				alert(data);
// 			}
// 		});
// 	}
</script>

