<?php
include("config.php");
$sql = "TRUNCATE TABLE MODE";
$result=mysqli_query($db,$sql);


$sql3 = "INSERT into mode VALUES('".$_GET["button"]."')";

echo $sql3;
$result=mysqli_query($db,$sql3);

header("Location: index.php");

?>