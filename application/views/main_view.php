<?php
   if(!isset($_SESSION['username'])){
   	header("Location: https://cissimsdev.azurewebsites.net/index.php/signin");
   }
   require('fieldCount.php');
   if(empty($_POST['s_id']))
   {
     $_POST['s_id'] = "0";
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Dashboard</title>
      <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
      <!--Cached Boostrap CDN-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!--Cached jQuery CDN-->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <!--<link rel="stylesheet" type="text/css" href="http://localhost/simsdemo/bootstrap/css/stylesheet.css"/>-->
      <link rel="stylesheet" type="text/css" href="<?= base_url()?>/bootstrap/css/stylesheet.css"/>
   </head>
   <body>
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
                  <a class="nav-link button3"><button type="button" onclick="window.location.href='https://cissimsdev.azurewebsites.net/index.php/users';">Account Manager</button></a>
               </li>
            </ul>
            <ul class="navbar-nav navbar-right">
               <li class="nav-item">
                  <a class="nav-link logoutButton"><button type="button"  onclick="location.href='https://cissimsdev.azurewebsites.net/index.php/signin/logout';">Logout</button></a>
               </li>
            </ul>
         </div>
      </nav>
         <div class="container-fluid text center">
         <div class="row content">
      <form method="POST" action="main?action=s_id=">
            <div class="col-sm-9">
               <div class="chart-wrapper well">
                  <div class="chart-title">
                     Display Option<br><br>
                  </div>
                  Select School Demographics:
                  <div class="chart-stage">
                     <!-- Put Drop Down Here -->
                     <select name="s_id" style="width: 35%;">
                        <option value="0">All Schools</option>
                        <option value="0061">MATTIE V RUTHERFORD ALT ED CTR</option>
                        <option value="0141">GRAND PARK CAREER CENTER</option>
                        <!-- Works minus Diversity-->
                        <option value="0151">BRENTWOOD ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->
                        <option value="0291">THE BRIDGE</option>
                        <option value="0331">ROBERT E LEE HIGH SCHOOL</option>
                        <!-- Doesn't Works -->
                        <option value="0351">ANDREW JACKSON HIGH SCHOOL</option>
                        <option value="0371">HENRY F KITE ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->
                        <option value="0471">LONE STAR HIGH SCHOOL</option>
                        <!-- Doesn't Works -->
                        <option value="0491">DUVAL REGIONAL JUVENILE DETENTION CENTER</option>
                        <!-- Doesn't Works -->
                        <option value="0531">DUVAL MYCROSCHOOL</option>
                        <!-- Doesn't Works -->
                        <option value="0621">OCEANWAY SCHOOL</option>
                        <option value="0631">DUNCAN U FLETCHER MIDDLE SCHOOL	</option>
                        <!-- Works minus Diversity-->
                        <option value="0661">ALFRED I DUPONT MIDDLE SCHOOL</option>
                        <option value="0691">LAKE SHORE MIDDLE SCHOOL</option>
                        <option value="0701">NORTH SHORE ELEMENTARY</option>
                        <option value="0731">JOHN LOVE ELEMENTARY SCHOOL</option>
                        <option value="0741">LAKE FOREST ELEMENTARY SCHOOL</option>
                        <option value="0811">PACE CENTER FOR GIRLS-JAX</option>
                        <!-- Doesn't Works -->
                        <option value="0821">LOVE GROVE ELEMENTARY SCHOOL</option>
                        <option value="0831">SAN JOSE ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->
                        <option value="0841">BAYVIEW ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->
                        <option value="0851">LAKE LUCINA ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->
                        <option value="0861">TERRY PARKER HIGH SCHOOL</option>
                        <option value="0891">WOODLAND ACRES ELEMENTARY SCHOOL</option>
                        <option value="0911">SALLYE B MATHIS ELEMENTARY SCHOOL</option>
                        <!-- Works minus Diversity-->
                        <option value="0931">PINEDALE ELEMENTARY SCHOOL</option>
                        <option value="0961">JEAN RIBAULT HIGH SCHOOL</option>
                        <option value="0971">CEDAR HILLS ELEMENTARY SCHOOL</option>
                        <option value="1061">LONG BRANCH ELEMENTARY SCHOOL</option>
                        <option value="1161">SADIE T TILLIS ELEMENTARY SCHOOL</option>
                        <option value="1181">SCHOOL FOR ACCELERATED LEARNING TECHNOLOGIES</option>
                        <!-- Doesn't Works -->
                        <option value="1281">SUSIE E TOLBERT ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->
                        <option value="1461">MATTHEW W GILBERT MIDDLE SCHOOL</option>
                        <option value="1491">SMART POPE LIVINGSTON ELEM</option>
                        <!-- Doesn't Works -->
                        <option value="1501">NEW BERLIN ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->	
                        <option value="1542">JOHN E FORD K-8 SCHOOL</option>
                        <option value="1551">NORTHWESTERN MIDDLE SCHOOL</option>
                        <option value="1561">YWLAYMLA</option>
                        <!-- Works minus Diversity-->
                        <option value="1581">GEORGE WASHINGTON CARVER ELEM</option>
                        <option value="1611">BARTRAM SPRINGS ELEMENTARY</option>
                        <!-- Doesn't Works -->	
                        <option value="1651">WILLIAM M RAINES HIGH SCHOOL</option>
                        <option value="1661">CARTER G WOODSON ELEM SCHOOL</option>
                        <option value="1691">S A HULL ELEMENTARY SCHOOL</option>
                        <option value="1811">HOSPITAL AND HOMEBOUND</option>
                        <!-- Doesn't Works -->	
                        <option value="1821">YOUTH DEVELOPMENT CENTER</option>
                        <!-- Doesn't Works -->
                        <option value="2051">PICKETT ELEMENTARY SCHOOL</option>
                        <option value="2072">J E B STUART MIDDLE SCHOOL</option>
                        <option value="2111">SOUTHSIDE MIDDLE SCHOOL</option>
                        <option value="2121">JEAN RIBAULT MIDDLE SCHOOL</option>
                        <option value="2131">ARLINGTON MIDDLE SCHOOL</option>
                        <option value="2161">JEFFERSON DAVIS MIDDLE SCHOOL</option>
                        <option value="2191">JOSEPH STILWELL MIDDLE SCHOOL</option>
                        <option value="2211">NORMANDY VILLAGE ELEMENTARY SCHOOL</option>
                        <option value="2361">MAMIE AGNES JONES ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->
                        <option value="2381">FORT CAROLINE MIDDLE SCHOOL</option>
                        <option value="2401">ARLINGTON HEIGHTS ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->	
                        <option value="2431">GREGORY DRIVE ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->	
                        <option value="2441">HIGHLANDS MIDDLE SCHOOL</option>
                        <option value="2451">CROWN POINT ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->	
                        <option value="2481">EDWARD H WHITE HIGH SCHOOL</option>
                        <option value="2501">PINE ESTATES ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->	
                        <option value="2531">TWIN LAKES ACADEMY MIDDLE</option>
                        <option value="2541">MAYPORT MIDDLE SCHOOL</option>
                        <option value="2551">ENTERPRISE LEARNING ACADEMY</option>
                        <!-- Doesn't Works -->
                        <option value="2561">LANDMARK MIDDLE SCHOOL</option>
                        <option value="2591">MANDARIN MIDDLE SCHOOL</option>
                        <!-- Doesn't Works -->	
                        <option value="2621">ANDREW A ROBINSON ELEMENTARY SCHOOL</option>
                        <option value="2651">FIRST COAST HIGH SCHOOL</option>
                        <!-- Doesn't Works -->
                        <option value="2681">ATLANTIC COAST HIGH SCHOOL</option>
                        <!-- Doesn't Works -->	
                        <option value="2691">BISCAYNE ELEMENTARY SCHOOL</option>
                        <!-- Doesn't Works -->	
                        <option value="2741">WESTVIEW K-8</option>
                        <option value="2791">KERNAN MIDDLE SCHOOL</option>
                        <!-- Doesn't Works -->	
                        <option value="2801">FRANK H PETERSON ACADEMIES</option>
                        <option value="2851">A PHILIP RANDOLPH ACADEMIES</option>
                        <option value="3518">MCKAY SCHOLARSHIPSCHOOL OF EN</option>
                        <!-- Doesn't Works -->
                        <option value="5421">BISCAYNE HIGH SCHOOL</option>
                        <option value="5611">BRIDGEPREP ACADEMY DUVAL COUNTY</option>
                        <!-- Doesn't Works -->
                        <option value="5631">SEASIDE CHARTER K-8 SCHOOL</option>
                        <!-- Doesn't Works -->	
                        <option value="N998">Home Education Setting</option>
                        <!-- Doesn't Works -->
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
         </div>
         <div class="col-sm-9">
            <div class="row">
               <div class="col-sm-4">
                  <div class="chart-wrapper">
                     <div class="chart-title">
                        Grade Level
                     </div>
                     <div class="chart-stage">
                        <div id="piechart"></div>
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
                        <div id="piechart2"></div>
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
                              <div id="piechart3"></div>
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
            </div>
         </div>
         <script language = "JavaScript"></script>
      </form>
   </body>
</html>