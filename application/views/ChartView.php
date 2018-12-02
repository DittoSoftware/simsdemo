<?php
echo'
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load("current", {"packages":["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
// Draw the chart and set the chart values
var data = google.visualization.arrayToDataTable([
  ["'.$field.'", "# of Students"],';
  for($i=0;$i<count($arrayA);$i++)
  {
      if($i==(count($arrayA)-1))
      {
       echo '["'.$arrayA[$i].'", '.$arrayB[$i].']]);';
      }
      else
      {
        echo '["'.$arrayA[$i].'", '.$arrayB[$i].'],';
      }
  }
    echo 'var options = {"title":"# of Students per '.$field.'", "width":550, "height":400};

  var chart = new google.visualization.PieChart(document.getElementById("piechart"));
  chart.draw(data, options);
}
</script>';

?>