<?php 
	require 'connect.php';
	require 'process-std.php';
	if (isset($_GET['stdID'])){
		$stdID = $_GET['stdID'];
		$std = handleStd("DELETE FROM `sinhvien` WHERE ID = '$stdID'");
	}


	$conn->close();	
 ?>