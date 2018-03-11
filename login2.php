<?php 
	
			include('config.php');
  
			$username = $_POST['uemail'];
			$password = $_POST['upasswd'];
			
			//MySqli Select Query
			$results = $mysqli->query("SELECT * FROM tbl_login");
			$a=0;
			$role = "User";
			
			while($row = $results->fetch_array()) {
			if($row["username"]==$username && $row["password"]==$password)
			{
				$role = $row["role"];
				$a=1;
				break;
			}
			}  
			if($a==1){
				session_start();
				$_SESSION['username'] = $username;
				if($role=="admin" or $role=="Admin"){
					header('Location: admin_main.php');
					echo "<b>Welcome $username </b>";
				}else
					if($role=="User" or $role=="user"){
						header('Location: dashboard.php');
						echo "<b>Welcome $username </b>";
					}
			}else
			{
				echo "<script>alert('Username or Password is incorrect.')</script>";
				header('Location: login.php');
			}
?>