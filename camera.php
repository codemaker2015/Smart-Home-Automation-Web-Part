<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Smart Home - Vishnu Sivan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
       
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <script>
		//Auto refresh a table 
//		$(document).ready(function(){
//			refreshTable();
//		});
//
//		function refreshTable(){
//			$('.tile-body').load('', function(){
//				setTimeout(refreshTable, 5000);
//			});
//		}

	</script>
	
  </head>
  <body class="app sidebar-mini rtl">
       <!-- Navbar-->
		<!--Header section -->
		<?php 
			session_start();
			include('header.php'); 
		?>
	<!-- End of Nav Bar-->
	
    <!-- Sidebar menu-->
		<?php include('sidebar.php');?>
	<!-- -->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Security - Camera</h1>
          <p>The way to secure your home.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">VHome</li>
          <li class="breadcrumb-item active"><a href="#">Security</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-body">
                <h4>Security Camera - Image</h4>
                <hr/>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <img src="images/captured.jpg" width="100%" height="100%" alt="No preview available"/>
                    <h4>&nbsp;</h4>
                    <button class="btn btn-primary" name="btnImage" type="submit">Capture</button>
                </form>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-body">
                <h4>Security Camera - Video</h4>
                <hr/>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <video class="embed-responsive" controls="true" width="100%" height="100%">
                        <source src="uploads/captured.mp4">
                    </video>	
                    <h4>&nbsp;</h4>
                    <button class="btn btn-primary" type="submit" name="btnVideo">Capture</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <?php     
        if(isset($_POST['btnImage'])){
            $setmode= shell_exec("raspimg -o captured.jpg");
        }
        if(isset($_POST['btnImage'])){
            $setmode= shell_exec("raspvid -o captured.mp4");
        }
    ?>
   
    <!-- Essential javascripts for application to work-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
	
  </body>
</html>