<?php
include("config.php");

header('Location: http://127.0.0.1:4040');


$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$url = substr($actual_link,0,25);

$sql1="truncate table webserver";
$result = mysqli_query($db,$sql1);

$sql = "Insert into webserver values('".$url."')";
$result = mysqli_query($db,$sql);
?>