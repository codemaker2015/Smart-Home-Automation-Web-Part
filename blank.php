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
			refreshTable();
		});

		function refreshTable(){
			$('.tile-body').load('getTable.php', function(){
				setTimeout(refreshTable, 5000);
			});
		}
		
		function check(cb) {
			if(cb.checked){
				//alert(cb.id);
				window.location.href = "btn_action1.php?id="+cb.id;
			}else{
				window.location.href = "btn_action2.php?id="+cb.id;
			}
		}
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
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
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