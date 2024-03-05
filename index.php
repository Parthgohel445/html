<?php
	$con = mysqli_connect("localhost","root","","email");
	if(isset($_POST['txtunm']))
	{
		$unm = $_POST['txtunm'];
		$pwd = $_POST['txtpwd'];
		$sql = "select * from `login_email` where `username`='$unm' and `password`='$pwd'";
		$res = mysqli_query($con,$sql);
		$count = mysqli_num_rows($res);
		if($count==1)
		{
			echo header("location:home.php");
		}
		else
		{
			echo "Invalid";
		}
	}
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My mail Login Page</title>
  
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="home.php"><b>My</b>Mail</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="txtunm" class="form-control" placeholder="Enter User Name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="txtpwd" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>
      <p class="mb-0">
        <a href="register.php" class="btn btn-danger w-100 text-center">Register a new membership</a>
      </p>
    </div>
   </div>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
