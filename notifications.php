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

    <!-- Data table plugin-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <script>
		//Auto refresh a table 
		$(document).ready(function(){
			refreshTable1();
                        refreshTable2();
		});

		function refreshTable1(){
			$('.tile-body').load('getnotificationTable.php', function(){
				setTimeout(refreshTable1, 10000);
			});
		}
		
                function refreshTable2(){
			$('#header-body').load('header.php', function(){
				setTimeout(refreshTable2, 15000);
			});
		}
	</script>
	
  </head>
  <body class="app sidebar-mini rtl">
       <!-- Navbar-->
		<!--Header section -->
		<div id="header-body">
                    
                </div>
	<!-- End of Nav Bar-->
	
    <!-- Sidebar menu-->
		<?php include('sidebar.php');?>
	<!-- -->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Notification</h1>
          <p>To display the notifications</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">VHome</li>
          <li class="breadcrumb-item active"><a href="#">Notification</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
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