	<?php include('config.php') ?>
	
        <?php
            $sql = "select * from tbl_notification where status = 'unread'";
            $results=$mysqli->query($sql);
            $notif_count = 0;
            if($results->num_rows >0)
                $notif_count = $results->num_rows;
                    
        ?>
      <header class="app-header"><a class="app-header__logo" href="index.html">Smart Home</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have <?php if($notif_count) echo $notif_count; else echo "no" ?> new notifications.</li>
            <div class="app-notification__content">
                <?php
                    $sql = "select * from tbl_notification where status = 'unread'";
                    $results=$mysqli->query($sql);
            
                    if($results->num_rows >0){
                       //output data of each row
                        while($row=$results->fetch_array()){                                 
                                 $datetime1 = date_create($row["date"]);
                                 $interval = date_diff($datetime1,date_create(date('Y-m-d H:i:s')));
                                echo ' <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg">'
                                    .'<i class="fa fa-circle fa-stack-2x text-'.$row["notification_type"].'"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>'
                                    .'<div>'
                                        .'<p class="app-notification__message"><strong>'.$row["notification_title"].'</strong><br/>'.$row["notification_desc"].'</p>'
                                        .'<p class="app-notification__meta">'.$interval->format("%i").' min ago</p>'
                                    .'</div></a>'
                                .'</li>';  
                        }
                    } 
                ?>
              <!--
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                    -->
                 </div>
            </div>
            <li class="app-notification__footer"><a href="notifications.php">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.php"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="login.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>