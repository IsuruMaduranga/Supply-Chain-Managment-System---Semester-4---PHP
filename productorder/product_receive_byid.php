<?php
	include_once('db.php');	
	
	$id = $_GET['id'];
	

	$result=mysqli_query($db,"SELECT * FROM products WHERE product_id='$id'");
	
	$rows = array();

	while ($r = mysqli_fetch_assoc($result)) {
		array_push($rows,$r);
	}

	echo json_encode($rows);
	
?>