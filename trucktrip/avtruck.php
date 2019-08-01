<?php

$date = $_GET['_date'];
$route_id = $_GET['store_id'];

require_once ("../inc/pdo.inc.php");
$pdo = getConnection("root","");

$sql = "SELECT trucks.truck_id FROM trucks WHERE trucks.truck_id NOT IN (SELECT tt.truck_id FROM truck_trip tt WHERE tt._date = ?) AND trucks.store_id = (SELECT store_id FROM routes WHERE route_id=? ORDER BY route_id DESC LIMIT 1)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$date,$route_id]);
$rows = $stmt->fetchAll();

echo json_encode($rows);

?>