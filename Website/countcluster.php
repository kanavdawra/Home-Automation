<?php

include('connect.php');



$sql = "SELECT DISTINCT cluster FROM home";
$result = $conn->query($sql);

echo $result->num_rows;
$conn->close();
?>