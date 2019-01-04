

<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-image:url(load_pic.jpg)">
<?php 
include("config.php");

$sql = "SELECT distance FROM shelf_3r";
      $result = mysqli_query($db,$sql);


if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo $row['distance'];
	}
}
?>
</body>
</html>
