<?php
if(!isset($_SESSION['username'])){
	header("Location: https://cissimsdev.azurewebsites.net/index.php/signin");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Add Account</title>

	<!--Cached Boostrap CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!--Cached jQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>



	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/stylesheet.css">


	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css"> -->
	<link href="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.css" rel="stylesheet" />
  	<script src="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.js" type="text/javascript"></script> 
</head>
<body class="keen-dashboard" style="padding-top: 80px;">

  <!-- <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="navbar-brand">SIMS &raquo; Account Manager</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
		  <li><a href="location.href='main'">Dashboard</a></li>
		  <li><a href="location.href='filemanager'">File Manager</a></li>
		  <li><a href="location.href='loadvw'">File Merge</a></li>
        </ul>
	  </div>
    </div>
  </div> -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link button1"><button type="button" onclick="window.location.href='https://cissimsdev.azurewebsites.net/index.php/main';">Dashboard</button></a>
					</li>
					<li class="nav-item">
						<a class="nav-link button2"><button type="button" onclick="window.location.href='https://cissimsdev.azurewebsites.net/index.php/loadvw';">File Merge</button></a>
					</li>
					<li class="nav-item">
						<a class="nav-link button3"><button type="button" onclick="window.location.href='https://cissimsdev.azurewebsites.net/index.php/filemanager';">File Manager</button></a>
					</li>
		
				</ul>
				<ul class="navbar-nav navbar-right">
						<li class="nav-item">
								<a class="nav-link logoutButton"><button type="button"  onclick="location.href='https://cissimsdev.azurewebsites.net/index.php/signin/logout';">Logout</button></a>
						</li>
				</ul>
			</div>
	</nav>

	<div class="container-fluid text-center">
	<div class="row content">
		<div class="col-sm-2 sidenav">
		<br>
		<img class="logo" src="<?= base_url()?>/images/cisLogo.png" alt="logo">
		</div>

<div class="container">
<br>
<div class="col-sm-8 text-left">
	<h2>Add Account</h2>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>index.php/users" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/insert">
				<div class="form-group">
					<label>Username:</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="text" class="form-control" name="password">
				</div>
				<div class="form-group">
					<label>First Name:</label>
					<input type="text" class="form-control" name="fname">
				</div>
				<div class="form-group">
					<label>Last Name:</label>
					<input type="text" class="form-control" name="lname">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label>Role:</label>
					<input type="number" class="form-control" name="role">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
		</div>
	</div>
</div>
</body>
</html>