<?php
require_once (__DIR__.'/../../../config/connect.php');

$id = $_POST['id'];
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$imagepathdef = $_POST['defphoto'];
$status = $_POST['check'];

$p_loc =__DIR__."/../../assets/adminImages/";
$temp = explode(".", $_FILES["profile"]["name"]);
$newfilename = round(microtime(true)) .$id.'.' . end($temp);
$aphoto = $p_loc.$newfilename;
$imageFileType = strtolower(pathinfo($aphoto,PATHINFO_EXTENSION));
$imagepath = "adminImages/".$newfilename;
$defimagepath = $_POST['defphoto'];
		// echo "outside";
if($status !== '0'){
	$query1 = "update admin set name='$name',lastname='$lastname',phone='$phone',email='$email', aphoto = 'imagepathdef' where id = '$id' ";
	$run_query = mysqli_query($connection , $query1);
	echo "<script>alert ('Profile Picture is not updated!')</script>";
	if($run_query){
		echo "<script>window.open('../../html/admin_table.php','_self')</script>";
	}

}
else{
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "JPEG"&& $imageFileType != "PNG"){
		echo "<script>alert ('Sorry, only JPG, JPEG, PNG & GIF files are allowed. Select Again!')</script>";
		echo "<script>window.open('../../html/admin_edit.php?edit=$id','_self')</script>";
	}
	else{
		if (move_uploaded_file($_FILES["profile"]["tmp_name"], $aphoto)) {
		// echo "insert";

			$query1 = "update admin set name='$name',lastname='$lastname',phone='$phone',email='$email', aphoto = '$imagepath' where id = '$id' ";
			$run_query = mysqli_query($connection , $query1);
			if($run_query){
				echo "<script>alert ('Administrator Profile Updated!')</script>";
				echo "<script>window.open('../../html/admin_table.php','_self')</script>";
			}
			else{
				echo "<script>alert ('Oops! Something Went Wrong.. Contact Help!')</script>";
				echo "<script>window.open('../../html/help.php','_self')</script>";
			}
		}
		else{
			echo "<script>alert ('Oops! Something Went Wrong.. Contact Help!')</script>";
			echo "<script>window.open('../../html/help.php','_self')</script>";
		}
	}
}


?>