<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Success Page - Smart Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
		<!--Header section -->
		<?php include('header.php'); ?>
	<!-- End of Nav Bar-->
	
    <!-- Sidebar menu-->
		<?php include('sidebar.php');?>
	<!-- -->
    <main class="app-content">
      <div class="page-error tile">
        <h1><i class="fa fa-info-circle"></i> Registration Successful.</h1>
        <p>You are successfully registered. </p>
        <!--<p><a class="btn btn-primary" href="javascript:window.history.back();">Go Home</a></p>-->
		<p><a class="btn btn-primary" href="index.php">Go Home</a></p>
      </div>
    </main>
    <!-- Page Javascripts-->
	<?php include('javascripts.php');?>
  </body>
</html>