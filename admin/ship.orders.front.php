<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 11/28/2018
 * Time: 4:37 PM
 */
require_once ("../inc/pdo.inc.php");
$pdo = getConnection("admin","admin");
$datetime = new DateTime('today');
$today = $datetime->format('w');
if($today == 0){$today = 7;}
$sql = "SELECT * FROM train_schedule WHERE _day>$today";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$trains = $stmt->fetchAll();
$sql =null;
$stmt=null;

$sql = "SELECT * FROM train_cities";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$train_cities = $stmt->fetchAll();
$sql =null;
$stmt=null;

$sql = "SELECT * FROM orders_details WHERE status ='processing'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/tables.css">
    <title>Ship Orders</title>
</head>
<body>
    <table class="striped" border = "1">
        <tr class="header">
            <td>Order ID</td>
            <td>Route ID</td>
            <td>Total Capacity</td>
            <td>train ID</td>
            <td>capacity left</td>
            <td></td>
        </tr>
        <?php
        foreach($rows as $row){
            echo "<tr>";
            echo "<form action=\"ship.orders.php?cap=".$row['total_capacity']."\" method=\"post\">";
            echo "<td>".$row["order_id"]."</td>";
            echo "<td>".$row["route_id"]."</td>";
            echo "<td>".$row["total_capacity"]."</td>";
            echo "<td>";
                echo  "<select name='".$row["order_id"]."'>";
                    foreach($trains as $train){
                        $availability = false;
                        foreach ($train_cities as $tc){
                            if($tc['train_id'] == $train['train_id'] and $tc['city']==$row['city2']){
                                $availability = true;
                            }
                        }
                        if($availability){
                        echo "<option value='".$train['train_id']."'>".$train['train_id']."</option>";}
                    }
                echo "</select>";
            echo "</td>";
            echo "<td></td>";
            echo "<td><input type=\"submit\" value=\"ship\" name=\"submit\"></td>";
            echo "</form></tr>";
        }
        ?>
    </table>
    <?php
        if(isset($_SESSION['ship'])){
            if($_SESSION['ship'] = "error"){
                echo "Error!";
            }
            elseif($_SESSION['ship'] = "terror"){
                echo "Transaction Error";
            }
            else{
                echo "shipped successfully!";
            }
            unset($_SESSION['ship']);
        }
    ?>

</body>
</html>

