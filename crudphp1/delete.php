<?php
	include 'conn.php';
	$id = $_GET['infoID'];
	$sql = "Delete from tabel_user where id = '$id'";
	if($conn->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:maintenance.php');
	}else{
		echo "Oppps something error ";
	}
	$conn->close();
?>