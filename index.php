<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART FRIDGE</title>
	<link rel="stylesheet" href="styles.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="date_time.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	
</head>
<body>

<div class="container">
<div class="Temperature">Temperature
<p id="temp1"></p>

Humidity<p id="hum1"></p></div>



<div class="third">
<div class="first">
<h1 style="margin-left:40px">SMART REFRIGERATOR - Based on IOT</h1>

<p id="invent"></p>


</div>

<div class="clock">
<span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>


<div class="webserver" id="mode">

</div>
<br>
<div class="webserver">
<a href="adjustshelf.php" target="_blank">ADJUST SHELF</a>
<a href="startwebserver.php" target="_blank">START SERVER</a>

<a href="webserver.php" target="_blank">WEB SERVER</a>


</div>
<div class="recepies">
<a href="https://www.allrecipes.com/recipes/722/world-cuisine/european/german/" target="_blank">RECEPIES</a>


</div>
</div>

</div>

<div class="status"><br><b>SENSOR DATA</b>

<table align="center">
<tr><td>LEVEL 3L</td></tr>
<tr id="shelf_3l"><td></td></tr>
<br>
<tr><td>LEVEL 3R</td></tr>
<tr id="shelf_3r"><td></td></tr>
<br>
<tr><td>LEVEL 2</td></tr>
<tr id="shelf_2"><td></td></tr>
<br>
<tr><td>LEVEL 1</td></tr>
<tr id="shelf_1"><td></td></tr>
<br>
</table>
</div>

<div class="madeby">
<div class="madeby">Supervisor
<br>
<br>
Prof. Dr. Harald Elders-Boll</div>



<div class="madeby">Made By
<br>
<br>
Kumar Shubham</div>

</div>

<div class="last">
<a href="mqtt.php" target="_blank">MQTT</a></div>
</div>​

<p hidden id = shellf1> </p>
<p hidden id = shellf2> </p>
<p hidden id = shellf3> </p>



	<div id="show"></div>
	<div id="show1"></div>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {	$('#show').load('data.php')	}, 1500);
			setInterval(function () {	$('#temp1').load('temperature.php')	}, 1500);
			setInterval(function () {	$('#hum1').load('humidity.php')	}, 1500);
			setInterval(function () {	$('#shelf_1').load('shelf_1.php')	}, 1500);
			setInterval(function () {	$('#shelf_2').load('shelf_2.php')	}, 1500);
			setInterval(function () {	$('#shelf_3l').load('shelf_3l.php')	}, 1500);
			setInterval(function () {	$('#shelf_3r').load('shelf_3r.php')	}, 1500);
			setInterval(function () {	$('#invent').load('inventory.php')	}, 1500);
			setInterval(function () {	$('#mode').load('mode.php')	}, 1500);
			setInterval(function () {	$('#shellf1').load('shelf_1/add_data_shelf_1.php')	}, 1500);
			setInterval(function () {	$('#shellf2').load('shelf_2/add_data_shelf_2.php')	}, 1500);
			setInterval(function () {	$('#shellf3').load('shelf_3R/add_data_shelf_3R.php')	}, 1500);
		});
	</script>
</body>
</html>
