<?php
// new filename
$filename = 'pic_'.date('YmdHis') . '.jpeg';
$url = '';
if( move_uploaded_file($_FILES['webcam']['tmp_name'],'upload/'.$filen)){


    echo("upload success");

}
// Return image url
echo $url;