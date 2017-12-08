<?php

include('connect.php');



$sql = "SELECT DISTINCT cluster FROM home";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
		$cluster=$row['cluster'];
echo '<li><a href="clusterdata.php?cluster='.$cluster.'">'.$cluster.'</a></li>';
			}
			
} else {
}
$conn->close();
?>