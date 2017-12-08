<?php

include('connect.php');

$name=$_POST['probename'];
$cluster=$_POST['clustername'];
$address=$_POST['probeaddress'];
$icon=$_POST['iconid'];
$color=$_POST['iconcolor'];
$id= $_GET['id'];
if($name==""){$name="Light";}
if($cluster==""){$cluster="Bedroom";}
if($address==""){$address="10101010";}
if($icon==""){$icon="icon-home";}
if($color==""){$color="#2255a4";}
$sql = "update home SET name='$name', cluster='$cluster',address='$address',color='$color',icon='$icon' where id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Refresh:0; url=edit.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>