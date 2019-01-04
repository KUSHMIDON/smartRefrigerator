<?php

include("config.php");


// sql to delete a record
$sql = 'UPDATE shelf SET product_name = "'.$_GET["product"].'" WHERE shelf_id ='.$_GET["shelf"].''; 

$result=mysqli_query($db,$sql);

$sql = 'UPDATE product SET product_name = "'.$_GET["product"].'" WHERE product_uid ='.$_GET["shelf"].''; 

$result=mysqli_query($db,$sql);

$sql1="SELECT count(*) from inventory where level=".$_GET['shelf'];

$result=mysqli_query($db,$sql1);

$row = mysqli_fetch_array($result); // Use something like this to get the result
$county = $row['count(*)'];


if($county<1)
{

$sql3 = "INSERT IGNORE into inventory(level, product_name) VALUES(".$_GET["shelf"].",'".$_GET["product"]."')";
$result=mysqli_query($db,$sql3);

$sql4 = "INSERT IGNORE into shelf(shelf_id, product_name) VALUES(".$_GET["shelf"].",'".$_GET["product"]."')";
$result=mysqli_query($db,$sql4);

}

else
{
$sql2 = 'UPDATE inventory SET product_name = "'.$_GET["product"].'" WHERE level ='.$_GET["shelf"].''; 
$result=mysqli_query($db,$sql2);

$sql5 = 'UPDATE shelf SET product_name = "'.$_GET["product"].'" WHERE shelf_id ='.$_GET["shelf"].''; 
$result=mysqli_query($db,$sql5);

}
header("Location: adjustshelf.php");
?>