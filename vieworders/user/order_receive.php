<?php

	session_start(); 
	
	if (isset($_SESSION['uid']) AND isset($_SESSION['type'])) {
	
		$id = $_SESSION['uid'];
	
		
	}else{
		//header("Location: "); 
		//exit();
	}
	
	include_once('db.php');
	$result=mysqli_query($db,"SELECT * FROM orders WHERE customer = '$id'");
	
	$rows = array();

	while ($r = mysqli_fetch_assoc($result)) {
		array_push($rows,$r);
	}

	echo json_encode($rows);
	
?>