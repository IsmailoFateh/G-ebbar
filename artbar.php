<?php include 'config.php';
 $query = "SELECT COUNT(*) `Value`,`part` FROM `personsport`,`person` WHERE `sid` = `psport` GROUP BY `part`";
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
          ['Task', 'Etudiant'],
          
          <?php  while($chart = mysqli_fetch_assoc($result)){
              echo"['".$chart['part']."',".$chart['Value']."],";
          } ?>
        ]);

        var options = {
          title: 'ART'
        };

        var chart = new google.visualization.Histogram(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 1000px; height: 800px;"></div>
  </body>
</html>