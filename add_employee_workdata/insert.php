<?php
	include_once('db.php');	
	
	$emp = mysqli_real_escape_string($_GET['emp']);
	$weekno = mysqli_real_escape_string($_GET['weekno']);
	$workhours = mysqli_real_escape_string($_GET['workhours']);
	
    try {
        $result = mysqli_query($db, "INSERT INTO employee_work_data (employee_id ,week_no,workhours) values ('$emp','$weekno','$workhours');");

        if ($result) {
            echo "Succesfully Saved";
        } else {
            echo "Error occured";
        }
    }catch(mysqli_sql_exception $e){
        $e->getMessage();
    }
	
?>