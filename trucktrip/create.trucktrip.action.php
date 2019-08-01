<?php


require_once ("../inc/pdo.inc.php");
$pdo = getConnection("root","");

session_start();

if (isset($_POST['submit'])) {
    $date = $_POST['_date'];
    $truck_id = $_POST['truck_id'];
    $driver_id = $_POST['driver_id'];
    $assistant_id = $_POST['assistant_id'];
    $status = "pending";
    $route_id = $_POST['route_id'];

    try{
        $sql = "INSERT INTO truck_trip(truck_id,_date,status,driver_id,assistant_id,route_id) VALUES (?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$truck_id,$date,$status,$driver_id,$assistant_id,$route_id]);
        if($stmt){
            echo "Successful";
        }
        
    }
    catch(PDOException $e){
        echo $stmt->errorInfo()[2];
    }

}

echo implode("",[$date,$truck_id,$driver_id,$assistant_id]);

?>