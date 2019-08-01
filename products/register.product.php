<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 11/27/2018
 * Time: 7:36 PM
 */
require_once ("../inc/pdo.inc.php");
$pdo = getConnection("root","");


session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $_type = $_POST['_type'];
    $capacity = $_POST['capacity'];
    $wholesale_price = $_POST['wholesale_price'];
    $retail_price = $_POST['retail_price'];
    $end_price = $_POST['end_price'];
    $available_qty = $_POST['available_qty'];

    try{
        $sql = "INSERT INTO products(name,_type,capacity,wholesale_price,retail_price,end_price,available_qty) VALUES (?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name,$_type,$capacity,$wholesale_price,$retail_price,$end_price,$available_qty]);
        if($stmt){
            echo "Successful";
        }
        
    }
    catch(PDOException $e){
        echo $stmt->errorInfo()[2];
    }

}
?>