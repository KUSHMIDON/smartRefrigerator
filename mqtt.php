<?php
include("config.php");
?>

<html>
<head>
</head>
<body align="center">
<form method="get" action="startmqttbroker.php">
<input type="submit" name="button" value="Start MQTT Broker" style="height:50px; width:500px">
</form>

<form method="get" action="mqtthostmodify.php">
        Hostname <input type="text" name="Hostname"><br><br>
        Port <input type="text" name="Port"><br><br>
		<input type="submit" value="Modify">
		<br>
		</form>

<form method="get" action="mqttsubscribe.php">
<input type="submit" name="button" value="Subscribe" style="height:50px; width:500px">
</form>

<form method="get" action="mqttpublish.php">
<input type="submit" name="button" value="Publish" style="height:50px; width:500px">
</form>

<a href="index.php">HOME PAGE</a>
</body>
</html>