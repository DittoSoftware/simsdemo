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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<link href="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.css" rel="stylesheet" />
  	<script src="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.js" type="text/javascript"></script> 
</head>
<body class="keen-dashboard" style="padding-top: 80px;">

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
  </div>
<div class="container">
	<h1 class="page-header text-center">Add Account</h1>
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
</body>
</html>