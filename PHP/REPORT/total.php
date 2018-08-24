<!DOCTYPE html>
<html lang="en-US">
<body style="background-color:rosybrown;">

<h2 align="center" style="text-shadow:0 2px 0px red;"><b> Report oF Collection till <?php echo date('Y-M-d');?> </b></h2>
<hr style="border-top: dotted 2px; color:green;">
<div id="piechart"  align="center">
</div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Agent', 'Collection Till Today'],
        <?php
 $db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db = 'abc';

// Create connection and select db
$db = new mysqli($db_host, $db_user, $db_pass, $db);

// Get data from database
$result = $db->query('SELECT agent_id,collection FROM agent_collection ORDER BY collection DESC');

if($result->num_rows > 0){
	
          while($row = $result->fetch_assoc()){
            printf("['".$row['agent_id']."', ".$row['collection']."],");
          }
      }
      ?>
]);

// Optional; add a title and set the width and height of the chart
  var options = { 'backgroundColor':'bisque','title':'Collection Till Today','width':600, 'height':490,'is3D': true};
  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</body>
<div align="center"><h2 style="color:brown;" >Collection till now...!!!</h2></div>
</html>
