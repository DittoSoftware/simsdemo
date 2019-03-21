


<!doctype html>
<html>
<head>
<title>Student Data File Merge</title>
<link href="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.css" rel="stylesheet" />
<script src="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.js" type="text/javascript"></script> 	
	
<script src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.dataTables.min.js"></script> 
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
        <ul class="nav navbar-nav navbar-left">
		  <li><a href="location.href='main'">Dashboard</a></li>
		  <li><a href="location.href='filemanager'">File Manager</a></li>
		  <li><a href="location.href='users'">Account Manager</a></li>
        </ul>
	  </div>
    </div>
  </div>
<?php
ini_set("memory_limit","512M");

use PhpOffice\PhpSpreadsheet\IOFactory;

use PhpOffice\PhpSpreadsheet\Helper\Sample;

//require_once $_SERVER['DOCUMENT_ROOT'] . '/demo/src/Bootstrap.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '\application\src\Bootstrap.php';
// require_once 'C:\xammp\htdocs\simsdemo\application\src\Bootstrap.php';
header("Cache-Control: no cache");



// $dir_path = "/xammp/htdocs/simsdemo/application/files/";
// $path = 'C:\xammp\htdocs\simsdemo\application\files\\';

$dir_path = "D:\home\site\wwwroot\application\\files";
$path = 'D:\home\site\wwwroot\application\files\\';

$options = "";
$a = array();
if(is_dir($dir_path))
{
    $files = opendir($dir_path);
    {
        if($files)
        {
          while(($file_name = readdir($files)) !== FALSE)
          {
              if($file_name != '.' && $file_name != '..')
              {
               // select option with files names 
               array_push($a, $file_name);
               // display the file names
              //    echo $file_name."<br>";
                    // print_r($a);
                    // echo "<br>";
                    
              }
          }
        }
    }
}



//add file path
for($i=0; $i < count($a); $i++){
  $a[$i] = $path . $a[$i];
}

$selected = array();


echo "<h3>Please Select Files to Merge</h3>
        <form  method='post'>
        <table id='example' class='display' style='width:100%'>
        <thead>
            <tr>
                <th><input type='checkbox' onClick='selectall(this)' />Select All</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>";

for($j=0; $j < count($a); $j++){
  // echo "<tr><td>". $a[$j] . "</td></tr>";
  // echo "<p><input type='checkbox' name='combine[]' value='".$a[$j]."'/>".$a[$j]."</p>";
  echo "<tr><td><input type='checkbox' name='combine[]' value='".$a[$j]."'/></td><td>".$a[$j]."</td>";

}

echo "    </tr></tbody><p><input type='submit' name='submit' value='Merge Files'/></p></form>";

if(isset($_POST["submit"])){
  if(!empty($_POST["combine"])){
    echo '<h3>Files Merged: Select Export to preview and download.</h3>';
    foreach($_POST["combine"] as $f){
      // echo '<p>' . $f . '<p>';
      array_push($selected, $f);
    } 
    $allData = [];
// $f = [$path . 'load1.xlsx', $path . 'load2.xlsx',$path . 'load3.xlsx', $path . 'load4.xlsx',$path . 'load5.xlsx', $path . 'load6.xlsx',$path . 'load7.xlsx', $path . 'load8.xlsx',$path . 'load9.xlsx', $path . 'load10.xlsx',$path . 'load11.xlsx', $path . 'load12.xlsx',$path . 'load13.xlsx', $path . 'load14.xlsx',$path . 'load15.xlsx', $path . 'load16.xlsx',$path . 'load17.xlsx', $path . 'load18.xlsx',$path . 'load19.xlsx', $path . 'load20.xlsx',$path . 'load21.xlsx', $path . 'load22.xlsx',$path . 'load23.xlsx', $path . 'load24.xlsx'];

    for($i = 0; $i < count($selected); $i++) {
      $helper = new Sample();

        // echo $_SESSION['file'];

        $inputFileType = 'Xlsx';
        // session_start();
        if(isset($_SESSION['file'])){
          echo 'set';
        }else{
        // $inputFileName = 'D:\home\site\wwwroot\application\views\load.xlsx';
        // $inputFileName = $path . 'load1.xlsx';
        $inputFileName = $selected[$i];
        // 

        }
        // $inputFileName = $_SESSION['file'];

        $reader = IOFactory::createReader($inputFileType);
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($inputFileName);

        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        $removed = array_shift($sheetData);
        $allData = array_merge($allData, $sheetData);
        // header("Location: http://localhost/simsdemo/index.php/merge");
        //header("Location: https://cissimsdev.azurewebsites.net/index.php/merge");

    }


    // print_r($allData);
    //C:\xammp\htdocs\simsdemo\output.txt

    $file = fopen("D:\home\site\wwwroot\output.txt", "w+");
    fwrite($file, "{ \"data\": ");
    fclose($file);
    $data = fopen("D:\home\site\wwwroot\output.txt","a");  
    fwrite($data, json_encode($allData, JSON_PRETTY_PRINT));
    fclose($data);
    $last = fopen("output.txt", "a");
    fwrite($last, "}");
    fclose($last);
	header("Location: https://cissimsdev.azurewebsites.net/index.php/merge");
  
  }
  else{
    echo '<script language="javascript">';
    echo 'alert("No files selected")';
    echo '</script>';;
  }
}


?>

<script language="JavaScript">
function selectall(source) {
  checkboxes = document.getElementsByName('combine[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}

$(document).ready(function() {
    $('#example').DataTable({
      
      "scrollY":        "600px",
      "scrollCollapse": true,
      "paging":         false
});
} );

</script>
</body>
</html>




<!-- </table>
</div>
<br>
<table>
  <tr>
    <td>
      <form method="post" action="export">
        <input type="submit" action="export" name="export_excel" class="btn btn-success" value="Download">
    </form>
      </td>
      <td>
      <button type="button" onclick="location.href='home.php'">Home</button>
      </td>
  </tr>
</table>




</center>
</body>
</html> -->
