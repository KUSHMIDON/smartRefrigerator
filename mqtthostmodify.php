<?php
include("config.php");
$sql = "TRUNCATE TABLE MQTT";
$result=mysqli_query($db,$sql);


$sql3 = "INSERT into mqtt VALUES('".$_GET["Hostname"]."','".$_GET["Port"]."')";

echo $sql3;
$result=mysqli_query($db,$sql3);

header("Location: mqtt.php");

?>