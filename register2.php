<?php 
	include("config.php");
	$name = '"'.$mysqli->real_escape_string($_POST['uname']).'"';
	$email = '"'.$mysqli->real_escape_string($_POST['uemail']).'"';
	$phone = '"'.$mysqli->real_escape_string($_POST['uphone']).'"';
	$passwd = '"'.$mysqli->real_escape_string($_POST['passwd']).'"';
	$home_pic = '"'.$mysqli->real_escape_string($_POST['hfile']).'"';
		//MySqli Insert Query
		$insert_row1 = $mysqli->query("INSERT INTO tbl_registration VALUES($name,$email,$phone,$home_pic)");
		//MySqli Insert Query
		$insert_row2 = $mysqli->query("INSERT INTO tbl_login VALUES($email,$passwd,'User')");
			
		$path = "uploads/";
		$path = $path.$name.$home_pic;
		//$file_name = $_FILES['hfile']['name'];
		if(move_uploaded_file("D:/Images/my/".$home_pic, $path))
			echo "The file ". $home_pic ." has been uploaded";
		else
			echo 'Error occurs while uploading files';
		
		if($insert_row1){
			//return total inserted records using mysqli_affected_rows
			//header( 'Location: page-success.php');
		}else{
			die(' Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
		
?>