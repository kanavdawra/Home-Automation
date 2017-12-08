<?php

include('connect.php');

$sql = "SELECT id,name, cluster, color, icon,currstate,address FROM home";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo '<li style="background-color: '. $row["color"]. ' > <a href="index.html"> <i class="'.$row["icon"].'"></i><i class="'.$row['currstate'].'" style="position: relative;font-size:15px;top:-45px;right:30px;"></i> <span class="label label-success">'.$row["cluster"].'</span>'.$row["name"].'</a> </li>';
        $color=$row['color'];
		$name=$row['name'];
		$cluster=$row['cluster'];
		$icon=$row['icon'];
		$id=$row['id'];
		$address=$row['address'];
		$currstate=$row['currstate'];
		if($currstate=="0000")
		{$currstate="icon-eye-close";
	$nxtstate="1000";
	}
	else{
		$currstate="icon-eye-open";
		$nxtstate="0000";
	}
		
			
        echo '<li style="background-color:'.$color.' " > <a href="publish.php?address='.$address.'&id='.$id.'&nxtstate='.$nxtstate.'"> <i class="'.$icon.'"></i><i class="'.$currstate.' pull-left" style="position: relative;font-size:15px;top:-45px;right:30px;"></i> <span class="label label-success">'.$cluster.'</span><i class="icon-blank pull-right" style="position: relative;font-size:15px;top:10px;right:-30px;color='.$color.'"></i>'.$name.'</a> </li>';
		
			}
} else {
    echo "Results: 0";
}
$conn->close();
?>