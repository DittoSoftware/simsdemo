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
  ["'.$topic.'", "# of Students"],';
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
    echo 'var options = {"title":"# of Students by '.$topic.'", "width":200, "height":350, "chartArea": {"width": "100%", "height": "80%"},
    "legend": {"position": "bottom"}};

  var chart = new google.visualization.PieChart(document.getElementById("'.$field.'"));
  google.visualization.events.addListener(chart, "ready", function () {
    '.$field.'.innerHTML = "<img src="" + chart.getImageURI() + ">";
    console.log('.$field.'.innerHTML);
  });
  chart.draw(data, options);
}
</script>'
?>