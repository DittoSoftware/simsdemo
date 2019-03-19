<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
// Load google charts
google.charts.load("current", {"packages":["corechart"]});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
function drawChart() 
{

  var data = google.visualization.DataTable([
    ["Grade Level","# of Students"],
    
]);
  // Optional; add a title and set the width and height of the chart
  var options = {"title":"# of Students by Grade Level", "width":550, "height":400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById("piechart"));
  chart.draw(data, options);
}