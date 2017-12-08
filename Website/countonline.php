<?php

include('connect.php');



$sql = "SELECT id,name, cluster, color, icon,currstate FROM home";
$row = "SELECT * FROM home WHERE currstate!='0000'";
$res = $conn->query($row);
$result = $conn->query($sql);


			echo $res->num_rows;
			

$conn->close();
?>