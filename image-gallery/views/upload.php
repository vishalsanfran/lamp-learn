<?php
//$newImageSubmitted is TRUE if form was submitted, otherwise FALSE
$newImageSubmitted = isset( $_POST['new-image'] );
if ( $newImageSubmitted ) {
    //this code runs if form was submitted
    $output = upload();
} else {
    //this runs if form was NOT submitted
    $output = include_once "views/upload-form.php";
}
return $output;
//declare new function
function upload(){
	include_once "classes/Uploader.class.php";
	//image-data is the name attribute used in <input type='file' />
    $uploader = new Uploader( "image-data" );
    $uploader->saveIn("img");
    $fileUploaded = $uploader->save();
    if ( $fileUploaded ) {
        $out = "new file uploaded";
    } else {
        $out = "something went wrong";
    }
    return $out;
}