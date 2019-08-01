<?php
	include_once('db.php');	

	$result=mysqli_query($db,"SELECT employee_id FROM employees");
	
	$rows = array();

	while ($r = mysqli_fetch_assoc($result)) {
		array_push($rows,$r);
	}

	echo json_encode($rows);
	
?>