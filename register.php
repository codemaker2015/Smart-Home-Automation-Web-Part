<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register :: Smart Home</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Smart Home</h1>
      </div>
      <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Register</h3>
            <div class="tile-body">
              <form class="form-horizontal" action="register2.php" method="POST">
                <div class="form-group row">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="uname" name="uname" placeholder="Enter full name" required>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-8">
                    <input class="form-control" type="email" id="uemail" name="uemail" placeholder="Enter email address" required>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">Phone</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="uphone" name="uphone" placeholder="Enter phone number" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Password</label>
                  <div class="col-md-8">
                    <input class="form-control" type="password" id="passwd" name="passwd" placeholder="Enter password" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Conform Password</label>
                  <div class="col-md-8">
                    <input class="form-control" type="password" id="cpasswd" name="cpasswd" placeholder="Enter conform password" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Home Picture</label>
                  <div class="col-md-8">
                    <input class="form-control" type="file" id="hfile" name="hfile">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-3">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" required>I accept the terms and conditions
                      </label>
                    </div>
                  </div>
                </div>

            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </div>
            </div>
			 </form>
			</div>
		  </div>
        </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>