<?php

include('connect.php');

$sql = "SELECT id,name, cluster, color, icon,currstate FROM home";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo '<li style="background-color: '. $row["color"]. ' > <a href="index.html"> <i class="'.$row["icon"].'"></i><i class="'.$row['currstate'].'" style="position: relative;font-size:15px;top:-45px;right:30px;"></i> <span class="label label-success">'.$row["cluster"].'</span>'.$row["name"].'</a> </li>';
        $id=$row['id'];
		$color=$row['color'];
		$name=$row['name'];
		$cluster=$row['cluster'];
		$icon=$row['icon'];
		$currstate=$row['currstate'];
		if($currstate=="0000")
		{$currstate="icon-eye-close";}
	else{
		$currstate="icon-eye-open";
	}
		
			
        echo '<li style="background-color:'.$color.' " > <a href="editdata.php?id='.$id.'"> <i class="'.$icon.'"></i><i class="'.$currstate.' pull-left" style="position: relative;font-size:15px;top:-45px;right:30px;"></i> <span class="label label-success">'.$cluster.'</span><i class="icon-pencil pull-right" style="position: relative;font-size:15px;top:10px;right:-30px;color='.$color.'"></i>'.$name.'</a> </li>';
		
			}
} else {
    echo "Results: 0";
}
$conn->close();
?>