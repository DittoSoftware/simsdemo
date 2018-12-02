<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

    </style>
</head>
<body>
<?php
    require('fieldcount.php');
    processPageRequest();

    function processPageRequest()
    {
        session_unset();
        if(empty($_GET['action']) || $_POST['chart_id'] == '0')
        {
          displayMain();
        }
        else if($_POST['chart_id'] == '1')
        {
          $field = 'Grade_Level';
          $DB_Table = 'tbl_name';
          displayChart($field,$DB_Table);
        }
        else if($_POST['chart_id'] == '2')
        {
          $field = 'Race_Desc';
          $DB_Table = 'tbl_name';
          displayChart($field,$DB_Table);
        }
        else if($_POST['chart_id'] == '3')
        {
          $field = 'Gender_Code';
          $DB_Table = 'tbl_name';
          displayChart($field,$DB_Table);
        }
        else if($_POST['chart_id'] == '4')
        {
          $field = 'School_Name';
          $DB_Table = 'tbl_name';
          displayChart($field,$DB_Table);
        }
    }

    function displayMain()
    {
      $r = 'home';
      echo 
    '<!DOCTYPE html>
    <html lang="en-US">
    <head>
    <title>SIMS: Student Information Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
    .indent-1 {float: left;}
    .indent-1 section {width: 50%; float: left;}
    </style>
    </head>
    <body style="background-color:#dddddd";>
    <center>
    <h1>Welcome, Admin</h1>
    <h2>Student Data Dashboard</h2>
    <form method="POST" action="main?action=chart_id=">
    <a href="home">Home</a>
    <input type="submit" value="Display Chart:">
    <select name="chart_id">
    <option value="0" name="0">Select Option</option>
    <option value="1" name="1">Grade Level</option>
    <option value="2" name="2">Race</option>
    <option value="3" name="3">Gender</option>
    <option value="4" name="4">Schools</option>
    </select>
    <button type="button" onclick="alert("Feature Not Avaliable yet!")">Export Data</button>
    <br><br>
    <p>Please Select an Option.</p>
    <section class="indent-1">
    <section>
    </section>
    <section>';
    //include 'DatabaseControl2.php';
    echo '</section>
    </section>
    </form>
    </center>
    </body>
    </html>';
    }

    function displayChart($field, $DB_Table)
    {

    $fieldArray = fieldCount($field, $DB_Table);
    $arrayA = [];
    $arrayB = [];
    $i = 1;
    while($i<count($fieldArray))
    {
    array_push($arrayA,$fieldArray[$i]["$field"]);
    $i++;
    } 
    $i = 1;
    while($i<count($fieldArray))
    {
    array_push($arrayB,$fieldArray[$i]['count']);
    $i++;
    } 
    echo 
    '<!DOCTYPE html>
    <html lang="en-US">
    <head>
    <title>SIMS: Student Information Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
    </style>
    </head>
    <body style="background-color:#dddddd";>
    <center>
    <h1>Welcome, Admin</h1>
    <h2>Student Data Dashboard</h2>
    <form method="POST" action="main?action=chart_id=">
    <a href="home">Home</a>
    <input type="submit" value="Display Chart:">
    <select name="chart_id">
    <option value="0" name="0">Select Option</option>
    <option value="1" name="1">Grade Level</option>
    <option value="2" name="2">Race</option>
    <option value="3" name="3">Gender</option>
    <option value="4" name="4">Schools</option>
    </select>
    <button type="button" onclick="alert("Feature Not Avaliable yet!")">Export Data</button>
    <br><br>
    <p>Please Select an Option.</p>
    <section class="indent-1">
    <section>
    <div id="piechart"></div>';
    include 'ChartView.php';
    echo '
    </section>
    <section>';
    //include 'DatabaseControl2.php';
    echo '</section>
    </section>
    </form>
    </center>
    </body>
    </html>';
    }
?>