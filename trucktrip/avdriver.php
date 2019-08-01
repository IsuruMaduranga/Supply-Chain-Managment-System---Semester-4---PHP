<?php

$date = $_GET['_date'];

require_once ("../inc/pdo.inc.php");
$pdo = getConnection("root","");

$sql = "SELECT employee_id FROM employees WHERE employee_id NOT IN (SELECT driver_id FROM truck_trip WHERE _date = ?) AND _type='driver' AND employee_id!= (SELECT driver_id FROM truck_trip ORDER BY truck_trip_id DESC LIMIT 1)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$date]);
$rows = $stmt->fetchAll();

echo json_encode($rows);

?>