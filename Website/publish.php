<?php
require("connect.php");
require("phpMQTT.php");
$id= $_GET['id'];
$address= $_GET['address'];
$nxtstate= $_GET['nxtstate'];
$flag=0;
$server = "###";     // change if necessary
$port = ####;                     // change if necessary
$username = "####";                   // set your username
$password = "####";                   // set your password
$client_id = "####"; // make sure this is unique for connecting to sever - you could use uniqid()


$message = $address.$nxtstate;
//MQTT client id to use for the device. "" will generate a client id automatically
$mqtt = new bluerhinos\phpMQTT($server, $port, "ClientID".rand());

if ($mqtt->connect(true,NULL,$username,$password)) {
  $mqtt->publish("data",$message, 0);
  $mqtt->close();
  $flag=1;
}
else{
  echo "Fail or time out";
}
if($flag==1)
{
	$sql = "update home SET currstate='$nxtstate' where id='$id'";

if ($conn->query($sql) === TRUE) {
	header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
