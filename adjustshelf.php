<html>
<head>
<link rel="stylesheet" href="styles.css">
<style>
input[type='text'] { font-size: 24px; text-align: center }
</style>
</head>
<body align="center">

<h1>SMART REFRIGERATOR - Based on IOT</h1>
<br>
<h2 style="color: green">SET THE LEVEL AND PRODUCT NAMES</h2>
        <?php
		include("config.php");
		
        $sql = "SELECT * FROM shelf order by shelf_id desc";
        $result = mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($result))
		{
        ?>
		<form method="get" action="modify.php">
        <input type="text" name="shelf" value="<?php echo $row['shelf_id']; ?>">
        <input type="text" name="product" value="<?php echo $row['product_name']; ?>">
		<input type="submit" value="Modify">
		<br>
		</form>
        <?php
        } //Close while{} loop
		
		
		
		
        ?>

</body>
</html>