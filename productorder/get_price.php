<?php 

	include_once('db.php');	
	session_start(); 
	
	$id = $_GET['id'];

	if (!isset($_SESSION['uid'])) {
		echo 0;

	}else{
		$user = $_SESSION['uid'];
		//$user = '1';
		$result=mysqli_query($db,"SELECT _type FROM customers WHERE customer_id='$user'");
		
		

		$rows = array();

		while ($r = mysqli_fetch_assoc($result)) {
			array_push($rows,$r);
		}

		foreach($rows as $res) {
		$type =  $res['_type'];
		
		$rows2 = array();
		$query='';
		if($type=="retail"){
			$query = "SELECT retail_price FROM products WHERE product_id ='$id'";
			$result2=mysqli_query($db,$query);
			while ($r2 = mysqli_fetch_assoc($result2)) {
				array_push($rows2,$r2);
			}
			foreach($rows2 as $res2) {
				echo $res2['retail_price'];
			}
		}
		if($type=="wholesale"){
			$query = "SELECT wholesale_price FROM products WHERE product_id ='$id'";
			$result2=mysqli_query($db,$query);
			while ($r2 = mysqli_fetch_assoc($result2)) {
				array_push($rows2,$r2);
			}
			foreach($rows2 as $res2) {
				echo  $res2['wholesale_price'];
			}
		}
		if($type=="customer"){
			$query = "SELECT end_price FROM products WHERE product_id ='$id'";
			$result2=mysqli_query($db,$query);
			while ($r2 = mysqli_fetch_assoc($result2)) {
				array_push($rows2,$r2);
			}
			foreach($rows2 as $res2) {
				echo $res2['end_price'];
			}
		
		}

		
	}
	

		
}




	

	

?>