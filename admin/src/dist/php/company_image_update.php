<?php
require_once (__DIR__.'/../../../config/connect.php');

$id = $_POST['id'];
$username = $_POST['username'];

$p_loc = __DIR__."/../../assets/companyImages/";
$temp = explode(".", $_FILES["logo"]["name"]);
$newfilename = $username.'logo'.'.' . end($temp);
$lphoto = $p_loc.$newfilename;
$imageFileType = strtolower(pathinfo($lphoto,PATHINFO_EXTENSION));
$logopath = "companyImages/".$newfilename;

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "JPEG"&& $imageFileType != "PNG"){
	echo "<script>alert ('Sorry, only JPG, JPEG, PNG & GIF files are allowed. Select Again!')</script>";
	echo "<script>window.open('../../html/company_edit.php?edit=$id','_self')</script>";
}
else{
	if (move_uploaded_file($_FILES["logo"]["tmp_name"], $lphoto)) {
		// echo "insert";

		$query1 = "update employee set image = '$logopath' where id = '$id' ";
		$run_query = mysqli_query($connection , $query1);
		if($run_query){
			echo "<script>alert ('Company Logo Updated!')</script>";
			echo "<script>window.open('../../html/company_edit.php?edit=$id','_self')</script>";
		}
		else{
			echo "<script>alert ('Oops! Something Went Wrong..  Contact Help!')</script>";
			echo "<script>window.open('../../html/help.php','_self')</script>";
		}
	}
	else{
		echo "<script>alert ('Oops! Something Went Wrong.. Contact Help!')</script>";
		echo "<script>window.open('../../html/help.php','_self')</script>";
	}
}



?>