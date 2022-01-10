<?php include 'config.php';
 $query = "SELECT COUNT(*) `Value`,`sname` FROM `personsport`,`person` WHERE `sid` = `psport` GROUP BY `sname`";
 $result = mysqli_query($conn, $query);
 
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js" ></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          
          <?php  while($chart = mysqli_fetch_assoc($result)){
              echo"['".$chart['sname']."',".$chart['Value']."],";
          } ?>
        ]);

        var options = {
          title: ' Sports'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 1500px; height: 1000px;"></div>
  </body>
</html>