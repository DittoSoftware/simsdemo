<?php
require('fieldCount.php');
processPageRequest();

    function processPageRequest()
    {
        session_unset();
        if($_POST['s_id'] != '')
        {
          $school = $_POST['s_id'];
        }
        else
        {
          $_POST['s_id'] = '0';
        }
      
    }

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SIMS &raquo; Dashboard</title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />

  <!-- Demo Dependencies -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> <!--invoke jquery first then highcharts libraries when you use highcharts to draw the plot.-->
  <script type="text/javascript" src="https://code.highcharts.com/modules/exporting.js"></script>
  <script type="text/javascript" src="highcharts.js">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.3.2/holder.min.js" type="text/javascript"></script>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
      <script src = "https://code.highcharts.com/highcharts.js"></script>  
      <script src = "https://code.highcharts.com/modules/drilldown.js"></script>  
      <script src = "https://code.highcharts.com/modules/data.js"></script> 
  <script>
    Holder.add_theme("white", { background:"#fff", foreground:"#a7a7a7", size:10 });
  </script>

  <!-- keen-analysis@1.2.2 -->
  <script src="https://d26b395fwzu5fz.cloudfront.net/keen-analysis-1.2.2.js" type="text/javascript"></script>

  <!-- keen-dataviz@1.1.3 -->
  <link href="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.css" rel="stylesheet" />
  <script src="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.js" type="text/javascript"></script>  

  <!-- Dashboard -->
  <link rel="stylesheet" type="text/css" href="../../assets/css/keen-dashboards.css" />
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
        <a class="navbar-brand">SIMS &raquo; Dashboard</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="location.href=\'home\'">Home</a></li>
        </ul>
      </div>
    </div>
  </div>
  <form method="POST" action="main?action=s_id=">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        <div class="chart-wrapper">
          <div class="chart-title">
            Display Option<br><br>
          </div>
          Select School Demographics:
          <div class="chart-stage">
            <!-- Put Drop Down Here -->
            <select name="s_id">
                <option value="0">Select Option</option>
                <option value="0061">MATTIE V RUTHERFORD ALT ED CTR</option>
                <option value="0141">GRAND PARK CAREER CENTER</option>
                <option value="0151">BRENTWOOD ELEMENTARY SCHOOL</option>
                <option value="0291">THE BRIDGE</option>
                <option value="0331">ROBERT E LEE HIGH SCHOOL</option>
                <option value="0351">ANDREW JACKSON HIGH SCHOOL</option>
                <option value="0371">HENRY F KITE ELEMENTARY SCHOOL</option>
                <option value="0471">LONE STAR HIGH SCHOOL</option>
                <option value="0491">DUVAL REGIONAL JUVENILE DETENTION CENTER</option>
                <option value="0531">DUVAL MYCROSCHOOL</option>
                <option value="0621">OCEANWAY SCHOOL</option>
                <option value="0631">DUNCAN U FLETCHER MIDDLE SCHOOL	</option>
                <option value="0661">ALFRED I DUPONT MIDDLE SCHOOL</option>
                <option value="0691">LAKE SHORE MIDDLE SCHOOL</option>
                <option value="0701">NORTH SHORE ELEMENTARY</option>
                <option value="0731">JOHN LOVE ELEMENTARY SCHOOL</option>
                <option value="0741">LAKE FOREST ELEMENTARY SCHOOL</option>
                <option value="0811">PACE CENTER FOR GIRLS-JAX</option>
                <option value="0821">LOVE GROVE ELEMENTARY SCHOOL</option>
                <option value="0831">SAN JOSE ELEMENTARY SCHOOL</option>
                <option value="0841">BAYVIEW ELEMENTARY SCHOOL</option>
                <option value="0851">LAKE LUCINA ELEMENTARY SCHOOL</option>
                <option value="0861">TERRY PARKER HIGH SCHOOL</option>
                <option value="0891">WOODLAND ACRES ELEMENTARY SCHOOL</option>
                <option value="0911">SALLYE B MATHIS ELEMENTARY SCHOOL</option>
                <option value="0931">PINEDALE ELEMENTARY SCHOOL</option>
                <option value="0961">JEAN RIBAULT HIGH SCHOOL</option>
                <option value="0971">CEDAR HILLS ELEMENTARY SCHOOL</option>
                <option value="1061">LONG BRANCH ELEMENTARY SCHOOL</option>
                <option value="0841">BAYVIEW ELEMENTARY SCHOOL</option>
                <option value="0851">LAKE LUCINA ELEMENTARY SCHOOL</option>
                <option value="0861">TERRY PARKER HIGH SCHOOL</option>
                <option value="0891">WOODLAND ACRES ELEMENTARY SCHOOL</option>
                <option value="1161">SADIE T TILLIS ELEMENTARY SCHOOL</option>	
                <option value="1181">SCHOOL FOR ACCELERATED LEARNING TECHNOLOGIES</option>
                <option value="1281">SUSIE E TOLBERT ELEMENTARY SCHOOL</option>
                <option value="1461">MATTHEW W GILBERT MIDDLE SCHOOL</option>
                <option value="1491">SMART POPE LIVINGSTON ELEM</option>
                <option value="1501">NEW BERLIN ELEMENTARY SCHOOL</option>	
                <option value="1542">JOHN E FORD K-8 SCHOOL</option>
                <option value="1551">NORTHWESTERN MIDDLE SCHOOL</option>	
                <option value="1561">YWLAYMLA</option>
                <option value="1581">GEORGE WASHINGTON CARVER ELEM</option>
                <option value="1611">BARTRAM SPRINGS ELEMENTARY</option>	
                <option value="1651">WILLIAM M RAINES HIGH SCHOOL</option>	
                <option value="1661">CARTER G WOODSON ELEM SCHOOL</option>	
                <option value="1691">S A HULL ELEMENTARY SCHOOL</option>	
                <option value="1811">HOSPITAL AND HOMEBOUND</option>	
                <option value="1821">YOUTH DEVELOPMENT CENTER</option>
                <option value="2051">PICKETT ELEMENTARY SCHOOL</option>	
                <option value="2072">J E B STUART MIDDLE SCHOOL</option>	
                <option value="2111">SOUTHSIDE MIDDLE SCHOOL</option>
                <option value="2121">JEAN RIBAULT MIDDLE SCHOOL</option>	
                <option value="2131">ARLINGTON MIDDLE SCHOOL</option>
                <option value="2161">JEFFERSON DAVIS MIDDLE SCHOOL</option>
                <option value="2191">JOSEPH STILWELL MIDDLE SCHOOL</option>
                <option value="2211">NORMANDY VILLAGE ELEMENTARY SCHOOL</option>
                <option value="2361">MAMIE AGNES JONES ELEMENTARY SCHOOL</option>	
                <option value="2381">FORT CAROLINE MIDDLE SCHOOL</option>
                <option value="2401">ARLINGTON HEIGHTS ELEMENTARY SCHOOL</option>	
                <option value="2431">GREGORY DRIVE ELEMENTARY SCHOOL</option>	
                <option value="2441">HIGHLANDS MIDDLE SCHOOL</option>	
                <option value="2451">CROWN POINT ELEMENTARY SCHOOL</option>	
                <option value="2481">EDWARD H WHITE HIGH SCHOOL</option>	
                <option value="2501">PINE ESTATES ELEMENTARY SCHOOL</option>	
                <option value="2531">TWIN LAKES ACADEMY MIDDLE</option>
                <option value="2541">MAYPORT MIDDLE SCHOOL</option>
                <option value="2551">ENTERPRISE LEARNING ACADEMY</option>
                <option value="2561">LANDMARK MIDDLE SCHOOL</option>	
                <option value="2591">MANDARIN MIDDLE SCHOOL</option>	
                <option value="2621">ANDREW A ROBINSON ELEMENTARY SCHOOL</option>	
                <option value="2651">FIRST COAST HIGH SCHOOL</option>
                <option value="2681">ATLANTIC COAST HIGH SCHOOL</option>	
                <option value="2691">BISCAYNE ELEMENTARY SCHOOL</option>	
                <option value="2741">WESTVIEW K-8</option>	
                <option value="2791">KERNAN MIDDLE SCHOOL</option>	
                <option value="2801">FRANK H PETERSON ACADEMIES</option>	
                <option value="2851">A PHILIP RANDOLPH ACADEMIES</option>
                <option value="3518">MCKAY SCHOLARSHIPSCHOOL OF EN</option>
                <option value="5421">BISCAYNE HIGH SCHOOL</option>
                <option value="5611">BRIDGEPREP ACADEMY DUVAL COUNTY</option>
                <option value="5631">SEASIDE CHARTER K-8 SCHOOL</option>	
                <option value="N998">Home Education Setting</option>
            </select>
            <br><br>
          <?php echo "Currently Displaying: School #".$_POST['s_id']."'s Student Data" ; ?>
          </div>
          <div class="chart-notes">
          <br><br>
          <button type="submit">Update Charts</button>
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div class="row">
          <div class="col-sm-4">
            <div class="chart-wrapper">
              <div class="chart-title">
                Grade Level
              </div>
              <div class="chart-stage">
              <div id="piechart"></div>';
              <?php $field = "piechart";
                    $topic = "Grade Level";
                    $school = $_POST['s_id']; 
                    $fieldArray = fieldCount('Grade_Level', 'tbl_name',$school);
                    $arrayA = [];
                    $arrayB = [];
                    $i = 1;
                    while($i<count($fieldArray))
                    {
                    array_push($arrayA,$fieldArray[$i]["Grade_Level"]);
                    $i++;
                    } 
                    $i = 1;
                    while($i<count($fieldArray))
                    {
                    array_push($arrayB,$fieldArray[$i]['count']);
                    $i++;
                    } 
              include 'ChartView.php'; ?>
              </div>
              <div class="chart-notes">
                
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="chart-wrapper">
              <div class="chart-title">
                Diversity
              </div>
              <div class="chart-stage">
              <div id="piechart2"></div>';
              <?php $field = "piechart2"; 
                    $topic = "Race";
                    $school = $_POST['s_id'];
                    $fieldArray = fieldCount('Race_Desc', 'tbl_name',$school);
                    $arrayA = [];
                    $arrayB = [];
                    $i = 1;
                    while($i<count($fieldArray))
                    {
                    array_push($arrayA,$fieldArray[$i]["Race_Desc"]);
                    $i++;
                    } 
                    $i = 1;
                    while($i<count($fieldArray))
                    {
                    array_push($arrayB,$fieldArray[$i]['count']);
                    $i++;
                    } 
              include 'ChartView.php'; ?>
              </div>
              <div class="chart-notes">
                
              </div>
            </div>
          </div>
          <div class="col-sm-9">
        <div class="row">
          <div class="col-sm-4">
            <div class="chart-wrapper">
              <div class="chart-title">
                Gender
              </div>
              <div class="chart-stage">
              <div id="piechart3"></div>';
              <?php $field = "piechart3"; 
                    $topic = "Gender";
                    $school = $_POST['s_id']; 
                    $fieldArray = fieldCount('Gender_Code', 'tbl_name',$school);
                    $arrayA = [];
                    $arrayB = [];
                    $i = 1;
                    while($i<count($fieldArray))
                    {
                    array_push($arrayA,$fieldArray[$i]["Gender_Code"]);
                    $i++;
                    } 
                    $i = 1;
                    while($i<count($fieldArray))
                    {
                    array_push($arrayB,$fieldArray[$i]['count']);
                    $i++;
                    } 
              include 'ChartView.php'; ?>
              </div>
            </div>
          </div>
    </div>
  </div>
  <script language = "JavaScript">
   
  </script>
</form>
</body>
</html>
