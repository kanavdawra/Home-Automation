<?php

include('connect.php');

$name=$_POST['probename'];
$cluster=$_POST['clustername'];
$address=$_POST['probeaddress'];
$icon=$_POST['iconid'];
$color=$_POST['iconcolor'];
if($name==""){$name="Light";}
if($cluster==""){$cluster="Bedroom";}
if($address==""){$address="10101010";}
if($icon==""){$icon="icon-home";}
if($color==""){$color="#2255a4";}
$sql = "INSERT INTO home (name, cluster,address,color,icon,off,s1,s2,s3,s4)
VALUES ('$name','$cluster','$address','$color','$icon','0000','1000','0100','0010','0001')";

if ($conn->query($sql) === TRUE) {
    header("Refresh:0; url=dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>