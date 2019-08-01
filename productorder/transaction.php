<?php
	session_start(); 
	
	$db = mysqli_connect('localhost','root','','sms') or die(mysqli_error($db));

	$order_id = '';
	$id=0;
	
	$customer=$_SESSION['uid'];
	
	//$customer = '1';
	$add_no = '';
	$street = '';
	$city1 = '';
	$city2 = '';
	$zip = '';
	$route_id = '';
	$delivery_date = '';
	$_value = '';
	$status = '';
	
	$products ='';
	
	

	$add_no = $_GET['add_no'];
	$street = $_GET['street'];
	$city1 = $_GET['city1'];
	$city2 = $_GET['city2'];
	$zip = $_GET['zip'];
	$route_id = $_GET['route_id'];
	$delivery_date = $_GET['delivery_date'];
	$_value = $_GET['_value'];
	$status = $_GET['status'];
	
	$products = $_GET['products'];
	$qtys = $_GET['qtys'];
	
	
	$ArrProducts = explode(',',$products);
	$ArrQtys = explode(',', $qtys);


	function begin($db){
		mysqli_query($db,"BEGIN");
	}

	function commit($db){
		mysqli_query($db,"COMMIT");
	}

	function rollback($db){
		mysqli_query($db,"ROLLBACK");
	}

	

	mysqli_select_db($db,"sms") or die(mysqli_error($db));
	
	$countquery = "SELECT COUNT(*) FROM orders";

	
	

	begin($db); // transaction begins
	
	$rows = array();

	$result = mysqli_query($db,$countquery );
	
			while ($r = mysqli_fetch_assoc($result)) {
				array_push($rows,$r);
			}
			foreach($rows as $res) {
				$order_id = implode("|",$res);
			}
	//echo $order_id;
			
	$id = (int)$order_id +1;
	//echo $id;
	
	$createorderquery = "INSERT INTO orders (order_id, customer ,add_no ,street,city1 ,city2 ,zip ,route_id ,delivery_date ,_value ,status ) values ('$id','$customer','$add_no','$street','$city1','$city2','$zip','$route_id','$delivery_date','$_value','$status');";
	
	//echo $createorderquery;
	
	$result2 = mysqli_query($db,$createorderquery );
	
	$result3 = true;
	
	for ($x = 0; $x < sizeof($ArrProducts); $x++) {
		$pr = $ArrProducts[$x];
		$qt = $ArrQtys[$x];
		
		//echo $pr;
		//echo '<br>';
		//echo $qt;
		
		$query = "INSERT INTO products_ordered (order_id, product_id, qty) values ('$id','$pr','$qt');";
		//echo $query;
		
		$today = date("Y-m-d");		
		$querysalesdata = "INSERT INTO sales_data (product_id, _date, city, route_id, item_sold ) values ('$pr','$today','$city2','$route_id','$qt');";
		//echo $querysalesdata;
		
		$loopresult = mysqli_query($db,$query );
		if(!$loopresult){
			$result3 =false;
			break;
		}
		
		$loopresult2 = mysqli_query($db,$querysalesdata);
		if(!$loopresult2){
			$result3 =false;
			break;
		}
		
		
	} 

	if(!$result OR !$result2 OR !$result3){
		rollback($db); // transaction rolls back
		echo "transaction rolled back";
		
		//if(!$result){echo '1';}
		//if(!$result2){echo '2';}
		//if(!$result3){echo '3';}
		exit;
	}else{
		commit($db); // transaction is committed
		echo "Database transaction was successful";
	}

?>
