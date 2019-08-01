<?php

require_once ("../inc/pdo.inc.php");
$pdo = getConnection("root","");

$sql = "SELECT route_id,route_path FROM routes";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();

echo json_encode($rows);

?>