<?php

include('connect.php');



$sql = "SELECT id,name, cluster, color, icon,currstate,address FROM home";
$row = "SELECT * FROM home WHERE currstate!='0000'";
$res = $conn->query($row);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $color=$row['color'];
		$name=$row['name'];
		$cluster=$row['cluster'];
		$icon=$row['icon'];
		$id=$row['id'];
		$currstate=$row['currstate'];
		$address=$row['address'];
		if($currstate=="0000")
		{$currstate="icon-eye-close";
	$nxtstate="1000";
	}
	else{
		$currstate="icon-eye-open";
		$nxtstate="0000";
		        echo '<li style="background-color:'.$color.' " > <a href="publish.php?address='.$address.'&id='.$id.'&nxtstate='.$nxtstate.'"> <i class="'.$icon.'"></i><i class="'.$currstate.' pull-left" style="position: relative;font-size:15px;top:-45px;right:30px;"></i> <span class="label label-success">'.$cluster.'</span><i class="icon-blank pull-right" style="position: relative;font-size:15px;top:10px;right:-30px;color='.$color.'"></i>'.$name.'</a> </li>';

	}
		
			
		
			}
			$count=$res->num_rows;
			if($count==0)
			{echo "Results: 0";}
} else {
    echo "Results: 0";
}
$conn->close();
?>