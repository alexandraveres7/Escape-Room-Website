<?php
	include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Escape Land</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/business-casual.min.css" rel="stylesheet">
	
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
</head>

<body>
	<h1 class="site-heading text-center text-white d-none d-lg-block">
		<span class="site-heading-upper text-primary mb-3"> <?php echo $lang[$language]['title'] ?> </span>
		<span class="site-heading-lower"> <?php echo $lang[$language]['name'] ?> </span>
	</h1>


    <div class="container">
	   <div class="login-box">
	   <div class="row">
	   <div class="col-md-6 login-left">
	    <h2> <?php echo $lang[$language]['login'] ?> </h2>
		<form action="validation.php" method="post">
		
	    <div class="form-group">
		 <label> <?php echo $lang[$language]['user'] ?> </label>
		 <input type="text" name="user" class="form-control" required>
		</div>
		
		  <div class="form-group">
		 <label> <?php echo $lang[$language]['pass'] ?> </label>
		 <input type="password" name="password" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary" name="login_user"> <?php echo $lang[$language]['login_button'] ?> </button>
		
		 </form>
	
	</div>
	
	 <div class="col-md-6 login-right">
	    <h2> <?php echo $lang[$language]['register'] ?> </h2>
		<form action="registration.php" method="post">
		
	    <div class="form-group">
		 <label> <?php echo $lang[$language]['user'] ?> </label>
		 <input type="text" name="user" class="form-control" required>
		</div>
		
		  <div class="form-group">
		 <label> <?php echo $lang[$language]['pass'] ?> </label>
		 <input type="password" name="password" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary" name="reg_user"> <?php echo $lang[$language]['register_button'] ?> </button>
		
		 </form>
	
	  </div>
	  </div>
	  </div>
	</div>
	
	<footer class="footer text-faded text-center py-5">
        <div class="container">
          <p class="m-0 small"> <a href="index.php?local=en">English</a> | <a href="index.php?local=ro">Romana</a></p>
        </div>
    </footer>
	
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
</body>
</html>