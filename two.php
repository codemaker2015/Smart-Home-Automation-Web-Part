<html>
<head>

<meta name="viewport" content="width=device-width" />
<title>Appliances Control</title>
<style >
	
#a{
	font-size: 2.5em;
	text-align: center;
   color:#D7DADB;
	}
	body{

		background-color:#090C0D;
	}
#b{
	font-size: 1.5em;
	text-align: center;
   color:#D7DADB;
}


</style>
	


</head>

        <body>
        <img src="pantech.png" height="20%">
        
        <marquee id="a" scrollamount="10"> BULB CONTROLLER </marquee>
        <form method="get" action="two.php">
                <input type="submit" value="ON" name="on" style="color:black;background-color:green;font-size:1.5em; margin: 40px 10px 10px 130px; width:30%; border-radius:25px;">
                <input type="submit" value="OFF" name="off" style="color:black;background-color:#E6C0B3;font-size:1.5em; margin: 25px 10px 50px 130px;width: 30%; border-radius: 25px;">
        <marquee id="a" scrollamount="10"> FAN CONTROLLER </marquee>
		<input type="submit" value="ON" name="yes" style="color:black;background-color:green;font-size:1.5em; margin: 40px 10px 10px 130px; width:30%; border-radius:25px;">
                <input type="submit" value="OFF" name="no" style="color:black;background-color:#E6C0B3;font-size:1.5em; margin: 25px 10px 50px 130px;width: 30%; border-radius: 25px;">
        </form>
        <p id="b">
        <?php
        $setmode21 = shell_exec("/usr/local/bin/gpio -g mode 21 out");
        if(isset($_GET['on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 1");
		 echo "BULB is on"  ;
	       
        }
        else if(isset($_GET['off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 21 0");
                echo "BULB is off" ;
	}
        ?>
	
	<?php
	$setmode26 = shell_exec("/usr/local/bin/gpio -g mode 26 out");
	if(isset($_GET['yes'])){
                $gpio_yes = shell_exec("/usr/local/bin/gpio -g write 26 1");

               
               echo "FAN is on"  ;
	       
        }
        else if(isset($_GET['no'])){
                $gpio_no = shell_exec("/usr/local/bin/gpio -g write 26 0");
                echo "FAN is off" ;
		
        }
	?>
	</p>

       </body>
</html>

