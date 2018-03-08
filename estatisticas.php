<?php 
include_once 'header.php';
 ?>
 <?php 
include_once 'submenu.php';



	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "teagames";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}



 ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
	var data = google.visualization.arrayToDataTable([
	['Partida', 'Erros']
	<?php  

		$user_id = $_SESSION['user_id'];

		$sql = "SELECT * FROM partidas WHERE user_id = '$user_id'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		// output data of each row
			$par = 1;
			while($row = $result->fetch_assoc()) {
				$erros = $row["erros"];
				echo ",['". $par ."',". $erros ."] ";
				$par = $par +1;
			}
		} else {
			echo ",['0',0]";
		}
		$conn->close();
	?>
	]);

	var options = {
	title: 'Performace no jogo',
	hAxis: {title: 'Partidas',  titleTextStyle: {color: '#333'}},
	vAxis: {minValue: 0}
	};

	var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
	chart.draw(data, options);
}
</script>
<div class="jumbotron">
	<div class="card">
		<div id="chart_div" style="width: 100%; height: 500px;">
			
		</div>
	</div>
	
</div>


 <?php 
include_once 'footer.html';
 ?>