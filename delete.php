<?php 

include "showDb.php";
$query= mysqli_query($db_connection,$sql);

	
$id = $_GET['id'];
$sql = "DELETE FROM `sagird` WHERE id= '$id'";


$query = mysqli_query($db_connection, $sql);

if ($query) {
	header("Location:qeydiyyatShow.php");
}else{
	echo "error";
}

?>