<?php
	$id = $_GET['id'];
	$id2[1] ="";
	for($i=11;$i<strlen($id);$i++)
	  $id2[$i-11] = $id[$i];
	
	
	include('config.php');
	$sql = 'update tbl_room_configuration set status = "OFF" where component_id ='.$id2[0].$id2[1];
	$result=$mysqli->query($sql);
	
	$sql = 'select GPIO_Pin from tbl_appliances where component_id = '.$id2[0].$id2[1];
	$result=$mysqli->query($sql);
	$pin=$result->fetch_array();
	
	$setmode= shell_exec("/usr/local/bin/gpio -g mode $pin[0] out");
	$gpio_on = shell_exec("/usr/local/bin/gpio -g write $pin[0] 1");

	date_default_timezone_set('Asia/Kolkata');
	$cookie_name = "log_id".$id2[0].$id2[1];
	$sql = "update tbl_log_status set end_time = '".date('H:i:s')."' where log_id = ".$_COOKIE[$cookie_name];
	$result=$mysqli->query($sql);
	
	$sql = 'select start_time,end_time from tbl_log_status where log_id = '.$_COOKIE[$cookie_name];
	$result=$mysqli->query($sql);
	$times=$result->fetch_array();
	$datetime1 = date_create(date('Y-m-d').$times[0]);
        $datetime2 = date_create(date('Y-m-d').$times[1]);
        $interval = date_diff($datetime1,$datetime2);
	//echo $interval->format("%i %s");
	
        $sql = "update tbl_log_meta set day_in_minutes = day_in_minutes + ".$interval->format("%i").", day_in_seconds = day_in_seconds + ".$interval->format("%s")." where component_id = $id2[0].$id2[1]";
	$result=$mysqli->query($sql);
	
	header("Location: ".$_GET['loc'].".php");
?>