<?php

include('connect.php');

$id= $_GET['id'];
$sql = "DELETE FROM home WHERE id = $id" ;
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    header("Refresh:0; url=delete.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>