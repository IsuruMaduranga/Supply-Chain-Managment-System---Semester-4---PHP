<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 11/28/2018
 * Time: 7:17 PM
 */
require_once ("../inc/pdo.inc.php");
$pdo = getConnection("admin","admin");

if(isset($_POST['submit'])){
    $yr = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $hr = $_POST['hour'];
    $min = $_POST['min'];
    $city1 = $_POST['city1'];
    $city2 = $_POST['city2'];

    try{
        if ((empty($yr) or empty($month) or empty($day) or empty($hr) or empty($min)) or (empty($city1) and empty($city2))){
            $_SESSION['train_data'] = "Empty Fields";
            header("Location: update.train.schedule.php");
        }
        elseif (!($yr === 2018 or $yr === 2019) or $month>12 or $month<1 or $day>31 or $day<1 or $hr<0 or $hr>12 or $min<0 or $min>59){
            $_SESSION['train_data'] = "Invalid Data";
            header("Location: update.train.schedule.php");
        }
        else{
            try {
                $_day = $yr."-".$month."-".$day;
                $_time = $hr.":".$min.":00";
                $pdo->beginTransaction();
                $sql = "INSERT INTO train_schedule (_day,_time,capacity) VALUES (?,?,50)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array($_day,$_time));
                if($stmt){
                    $pdo->commit();
                    echo "Successful";
                }
            }
            catch(PDOException $e){
                echo $stmt->errorInfo()[2];
                $pdo->rollBack();
            }
        }
    }
    catch(Exception $e){
        $_SESSION['train_data'] = "Error";
        header("Location: update.train.schedule.php");
    }
}
else{
    echo "Submission Unsuccessful";
}