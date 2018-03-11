<html>
<head>

<meta name="viewport" content="width=device-width" />
<title>LED Control</title>
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
       <marquee id="a" scrollamount="10"> WEB PAGE ON PHP BASED GPIO Control: </marquee>
        <form method="get" action="one.php">
                <input type="submit" value="ON" name="on" style="color:black;background-color:green;font-size:2.5em; margin: 40px 10px 10px 180px; width:70%; border-radius:25px;">
                <input type="submit" value="OFF" name="off" style="color:black;background-color:#E6C0B3;font-size:2.5em; margin: 25px 10px 50px 180px;width: 70%; border-radius: 25px;">
        </form>
        <p id="b">
        <?php
        $setmode= shell_exec("/usr/local/bin/gpio -g mode 21 out");
        if(isset($_GET['on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 1");

               
               echo "LED is on" ;
        }
        else if(isset($_GET['off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 21 0");
                echo "LED is off" ;
        }
        ?>
       
       </p>

        </body>
</html>

