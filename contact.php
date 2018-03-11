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
          <h1><i class="fa fa-th-list"></i> Contact Us</h1>
          <p>We solve your issues. Feel free to contact.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">VHome</li>
          <li class="breadcrumb-item active"><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Contact Us</h3>
            <div class="tile-body">
              <form class="form-horizontal">
                <div class="form-group row">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="Enter full name">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-8">
                    <input class="form-control" type="email" placeholder="Enter email address">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Subject</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" placeholder="Enter the queries"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Attachments</label>
                  <div class="col-md-8">
                    <input class="form-control" type="file">
                  </div>
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>		
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-body">
				
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
	
  </body>
</html>