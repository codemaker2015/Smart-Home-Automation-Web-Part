<!DOCTYPE html>
<html>
  <head>
    <title>Smart Home - Index Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        $(document).ready(function(){
            refreshTable();
        });
        function refreshTable(){
            $('#chartData').load('chartData.php', function(){
		setTimeout(refreshTable, 5000);
            });
        }
    </script>
  </head>
  <body class="app sidebar-overlay pace-done sidenav-toggled">
    <!-- Navbar-->
      <?php include('index-header.php'); ?>
	  <!-- Sidebar menu-->
      <?php //include('sidebar.php'); ?>
	
    <main class="app-content">
      <!--<div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and modular admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>-->
    
      <div class="">
        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              <div class="jumbotron">
                <h1 class="display-3">Living Smart @ Smart Home</h1>
                <hr/>
                <img src="images/smarthome.jpg" alt="Smart Home " width="100%" height="100%"/>
                <h6>&nbsp;</h6>
                <p><a class="btn btn-primary btn-lg" href="#">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
       <!--
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Raspberry Pi Usage</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Temperature</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
       -->
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Amazingly Powerful</h3>
            <p>Custom graphical control pages allow you to design the perfect user interface. Comprehensive scheduling and triggering features support very complex logic, letting you step beyond home control and into intelligent smart home automation. Hierarchical conditions allow you to fine-tune your system. And these features are configured using an intuitive user interface. For really advanced functionality, scripting via the industry standard Python language enables limitless possibilities.</p>
           </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Infinitely expandable</h3>
            <p>
                If the built-in protocols don't support a device or service you want to integrate, there's probably a 3rd party plugin that will. There are plugins that integrate security systems, weather data, home theater components, energy monitoring devices, sprinklers, thermostats, and many other devices and services. Plugins can also supply events, such as data and notifications from incoming services and actions like sending push notifications custom device controls. <br/>&nbsp;</p>
          </div>
        </div>
          
        <div class="row">
          <div class="col-lg-12">
            <h3>Features</h3>
            <hr/>
          </div>
        </div>
        <div class="row">
            
            <div class="col-lg-4">
            <div class="bs-component">
              <div class="card mb-3 text-white bg-primary">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                      <h4>Devices</h4>
                      <hr/>
                    <p>Devices are the cornerstone of VHome. In VHome they are used to represent and control your smart devices: switches, lamps, appliances, thermostats etc. They are also used to provide integration with other services, such as iTunes, NOAA weather servers, and more.</p>
                    <footer>
                      
                    </footer>
                  </blockquote>
                </div>
              </div>
              <div class="card mb-3 text-white bg-dark">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                      <h4>Website</h4>
                      <hr/>
                    <p>For those who don't own an iOS device, we provide VHome Touch for the Web, which provides controls that give you the same functionality as VHome Touch for iOS. This includes the ability to remotely control smart devices and use custom graphical pages designed using the VHome graphical editor.</p>
                    <footer> 
                      
                    </footer>
                  </blockquote>
                </div>
              </div>
              <div class="card mb-3 text-white bg-primary">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                      <h4>Schedules</h4>
                      <hr/>
                      <p>Schedules are special time-based events. You define a schedule by specifying time and date components. Schedules have powerful and flexible options including randomization. For example, you can easily create a single schedule that executes 10 minutes on everyday.</p>
                    <footer> 
                      
                    </footer>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">

              <div class="card mb-3 text-white bg-warning">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                      <h4>Control Pages</h4>
                      <hr/>
                      <p>Control Pages are the primary way you interactively control VHome. While triggers and schedules execute automatically by VHome, you can use control pages (via VHome Touch clients) to manually control your smart home. Our graphical designer allows you to create very beautiful pages.</p>
                    <footer>
                      
                    </footer>
                  </blockquote>
                </div>
              </div>
              <div class="card mb-3 text-white bg-danger">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                      <h4>Actions</h4>
                      <hr/>
                    <p>Actions are operations that VHome can perform like turning on a light, sending an email, adjusting the setpoint on a thermostat, or pausing iTunes. Action Groups are a simple way to create a collection of actions to be used in multiple triggers and schedules.</p>
                    <footer>
                      
                    </footer>
                  </blockquote>
                </div>
              </div>
                 <div class="card mb-3 text-white bg-warning">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                      <h4>Secure Access</h4>
                      <hr/>
                    <p>VHome has secure built-in access to your smart home from anywhere in the world. This access provides encrypted communication between Indigo Touch and your Indigo server for complete security. No need for any router configuration in your home or dynamic DNS services.</p>
                    <footer> 
                      
                    </footer>
                  </blockquote>
                </div>
              </div>    
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card mb-3 text-white bg-success">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                      <h4>Triggers</h4>
                      <hr/>
                      <p>Events in VHome are generally referred to as Triggers. Triggers allow you to define which events VHome will detect and what actions to perform — for instance, when a button is pressed, a temperature goes below a threshold, energy usage goes over a threshold, or the garage door is opened.</p>
                    <footer> 
                      
                    </footer>
                  </blockquote>
                </div>
              </div>
             
              <div class="card mb-3 text-white bg-info">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                      <h4>Variables</h4>
                      <hr/>
                      <p>Variables allow you to store bits of information that can be used throughout your VHome logic. Unlike other automation platforms where variables are an afterthought or their values aren't saved permanently, variables in VHome are given first-class status and their values are always saved.</p>
                    <footer> 
                      
                    </footer>
                  </blockquote>
                </div>
              </div>  
              <div class="card mb-3 text-white bg-success">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                      <h4>Expandable</h4>
                      <hr/>
                      <p>If you want to renovate or enlarge an attic to add switches later on, VHome is the best suited and value-for-money alternative to the routing of cables. VHome is the right way to integrate into future smart grids and to create assisted living concepts.</p>
                    <footer> 
                      
                    </footer>
                  </blockquote>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">

            </div>
          </div>
            
      </div>
        
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <div>
        <?php
             $val = array();
             for($i=0;$i<7;$i++)
                $val[$i] = rand(1,100);
        ?>
    </div>
    <div id="chartData">
       
    </div>
    <footer><center>Copyright &copy; 2018 VSoft Technologies</center></footer>
  </body>
</html>