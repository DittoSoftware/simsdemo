<?php
if(!isset($_SESSION['username'])){
	header("Location: https://cissimsdev.azurewebsites.net/index.php/signin");
}
?>
<!doctype html>
<html>
<head>
<title>Student Data File Merge</title>
<!-- <script src="xlsx.full.min.js"></script> -->
<script src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.dataTables.min.js"></script>  

<script src="<?php echo base_url(); ?>js/dataTables.buttons.min.js"></script> 
<script src="<?php echo base_url(); ?>js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>js/jszip.min.js"></script> 

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<link href="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.css" rel="stylesheet" />
  	<script src="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.js" type="text/javascript"></script> 

<link rel="stylesheet" href="<?php echo base_url();?>CSS/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>CSS/jquery.dataTables.min.css">
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
        <a class="navbar-brand">SIMS &raquo; File Merge</a>
      </div>
      <div class="navbar-collapse collapse">
      <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link button1"><button type="button" onclick="window.location.href='https://cissimsdev.azurewebsites.net/index.php/main';">Dashboard</button></a>
               </li>
               <li class="nav-item">
							<a class="nav-link button2"><button type="button" onclick="window.location.href='https://cissimsdev.azurewebsites.net/index.php/filemanager';">File Manager</button></a>
						</li>
               <li class="nav-item">
                  <a class="nav-link button3"><button type="button" onclick="window.location.href='https://cissimsdev.azurewebsites.net/index.php/loadvw';">File Merge</button></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link button4"><button type="button" onclick="window.location.href='https://cissimsdev.azurewebsites.net/index.php/users';">Account Manager</button></a>
               </li>
            </ul>
	  </div>
    </div>
  </div>
<center><h1>Export Data</h1></center>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Student Id</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Location</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
            <th>Student Id</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Location</th>
            </tr>
        </tfoot>
    </table>
<script>

$(document).ready(function() {
    $('#example').DataTable( {
        // "ajax": '../ajax/data/output.txt'
        "ajax": '<?php echo base_url();?>output.txt',
        "pageLength": 20,
        dom: 'Blfrtip',
        buttons: [ 'excelHtml5'
            // 'copyHtml5',
            // 'csvHtml5',
            // 'pdfHtml5'
        ]

    } );
} );


</script>
</body>
</html>
