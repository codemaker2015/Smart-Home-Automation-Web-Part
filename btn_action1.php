<?php
	$id = $_GET['id'];
	$id2[1] = "";
	for($i=11;$i<strlen($id);$i++)
	   $id2[$i-11] = $id[$i];
	
	
	include('config.php');
	$sql = 'update tbl_room_configuration set status = "ON" where component_id ='.$id2[0].$id2[1];
	$result=$mysqli->query($sql);
	
	$sql = 'select GPIO_Pin from tbl_appliances where component_id = '.$id2[0].$id2[1];
	$result=$mysqli->query($sql);
	$pin=$result->fetch_array();
	
	$setmode= shell_exec("/usr/local/bin/gpio -g mode $pin[0] out");
	$gpio_on = shell_exec("/usr/local/bin/gpio -g write $pin[0] 1");
	
	date_default_timezone_set('Asia/Kolkata');
	
	$sql = "insert into tbl_log_status(component_id,date,start_time) values('$id2[0].$id2[1]','".date('Y-m-d')."','".date('H:i:s')."')";
	$result=$mysqli->query($sql);
	$sql = 'select max(log_id) from tbl_log_status';
	$result=$mysqli->query($sql);
	$log_id=$result->fetch_array();
	
	$cookie_name = "log_id".$id2[0].$id2[1];
	$cookie_value = $log_id[0];
	setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
	
	header("Location: ".$_GET['loc'].".php");
?>