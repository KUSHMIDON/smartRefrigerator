<html>
<head>
</head>
<body>
<h5 style="color:black;"><?php
include("config.php");
$sql = "Select direction from mode";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
echo "RFID MODE";
echo "<br>";
echo $row['direction'];
?></h5>
<form method="get" action="modeModify.php">
<input type="submit" name="button" value="IN">&nbsp;<input type="submit" name="button" value="OUT">
</form>
</body>
</html>