<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 11/29/2018
 * Time: 1:17 AM
 */
require_once("../inc/pdo.inc.php");
$pdo = getConnection("admin","admin");
if(isset($_POST['submit'])) {
    unset($_POST['submit']);
    foreach ($_POST as $key => $value) {
        try{
            $sql = "SELECT _day FROM train_schedule WHERE train_id = ?";
            $query = $pdo->prepare($sql);
            $query->execute(array($value));
            $result = $query->fetch();
            $gendate = new DateTime();
            $gendate->setISODate(2018,date("w"), $result['_day']); //year , week num , day
            $_date = $gendate->format('Y-m-d');

            $sql = "SELECT total_capacity FROM orders_details WHERE order_id = ?";
            $query = $pdo->prepare($sql);
            $query->execute(array($key));
            $result = $query->fetch();
            $tot_capacity = $result['total_capacity'];
            echo $value."<br>";
            echo $_date."<br>";
            $sql = "CALL getShipmentInfo(?,$_date)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array($value));
            if (!$stmt->rowCount()) {
                $sql = "INSERT INTO shipments (train_id,_date,status,capacity_left) VALUES (?,$_date,'processing',500)";
                $stmt = null;
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array($value));

                $sql = "CALL getShipmentInfo(?,$_date)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array($value));
            }
            $ship_id = $stmt->fetch()['shipment_id'];
            $stmt = null;
            try {
                $pdo->beginTransaction();
                $sql = "INSERT INTO shipment_orders (shipment_id,order_id,store_id) VALUES (?,?,getStoreId(?))";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array($ship_id, $key,$key));

                $sql = "CALL updateShipCapacity(?,?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array($ship_id, $tot_capacity));

                $sql = "UPDATE orders SET status = 'shipped' WHERE order_id=?";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array($key));

                $pdo->commit();

            }catch(PDOException $e){
                $pdo->rollBack();
                echo $e->getMessage();
                die();
            }

            $_SESSION['ship'] = "successful";
            header("Location: ship.orders.front.php");
        }
        catch (PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
}