<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
        <style type="text/css">
            tr.header
            {
                font-weight:bold;
            }
            tr.alt
            {
                background-color: #777777;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
               $('.striped tr:even').addClass('alt');
            });
        </script>
        <title></title>
    </head>
    <body>
        <?php

            include('config.php');
            $sql = "select * from inventory order by level desc";
			$query = mysqli_query($db,$sql);
        ?>
        <table class="inventory" border="1">
            <thead><tr class="header">
                <td>LEVEL</td>
                <td>PRODUCT</td>
				<td>SHELF VIEW</td>
                <td>QUANTITY</td>
            </tr></thead>
            <?php
			
               while ($row = mysqli_fetch_array($query)) {
				   $string = "";
                   echo "<tr>";
                   echo "<td>".$row['level']."</td>";
                   echo "<td>".$row['product_name']."</td>";
				   $x = $row['product_quantity'];
				   if($x!=0)
				   {
				   for($i = 0 ; $i<$x ; $i++)
				   {
					   $string = $string.'X ';
				   }
				   
				   }
				   else
				   {
				   }
				   echo "<td>".$string."</td>";
                   echo "<td>".$row['product_quantity']."</td>";
                   echo "</tr>";
               }

            ?>
			<tr><td colspan="3">&nbsp</td><td align="center" rowspan="4">EGG TRAY<?php 
																
															
																$stri = "";
																$sql1 = "SELECT * FROM EGGS";
																$result1 = mysqli_query($db,$sql1);
																$row1 = mysqli_fetch_array($result1);
																
																$qty = $row1['Value'];
																if ($qty==0)
																{
																	echo '<p style="border: 5px solid black; font-size:48px; width:200px;">NULL</p>';
																}
																else
																{
																for($i=1;$i<=$qty;$i++)
																{
																	$stri = $stri."0 ";
																}
																echo '<p style="border: 5px solid black; font-size:48px; width:200px;">'.$stri.'</p>';
																}
																?></td></tr>
<tr><td colspan="3">Generate Shopping List</td></tr>
<tr><td colspan="3">Modify Products</td></tr>
        </table>
    </body>