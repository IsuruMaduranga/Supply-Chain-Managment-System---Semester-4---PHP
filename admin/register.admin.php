<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 11/27/2018
 * Time: 7:36 PM
 */
require_once ("../inc/pdo.inc.php");
session_start();
$pdo = getConnection("admin","admin");

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $add_no = $_POST['add_no'];
    $street = $_POST['street'];
    $city1 = $_POST['city1'];
    $city2 = $_POST['city2'];
    $zip = $_POST['zip'];
    $password = $_POST['password'];
    $type = "admin";

    if (empty($first_name) or empty($last_name) or empty($nic) or empty($email) or empty($add_no) or empty($street) or empty($city1) or empty($zip) or empty($password)) {
        $_SESSION['admin_reg'] = 'empty';
        echo "EMPTY FIELDS";
        //header("Location: registration.admin.php");
    } else if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $_SESSION['admin_reg'] = 'invalidemail';
        ECHO "INVALID EMAIL";
        //header("Location: registration.admin.php");

    } else if ((1 === preg_match('~[0-9]~', $first_name)) or (1 === preg_match('~[0-9]~', $last_name))) {
        $_SESSION['admin_reg'] = 'invalidname';
        ECHO "INVALID NAME";
        //header("Location: registration.admin.php");

    } else {
        $hashed_pass = sha1($password);
        try{
            $sql = "INSERT INTO users (first_name,last_name,nic,email,add_no,street,city1,city2,zip,password_hash,_type) VALUES (:first_name,:last_name,:nic,:email,:add_no,:street,:city1,:city2,:zip,:hashed_pass,:_type)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ":first_name" => $first_name,
                ":last_name" => $last_name,
                ":nic" => $nic,
                ":email" => $email,
                ":add_no" => $add_no,
                ":street" => $street,
                ":city1" => $city1,
                ":city2" => $city2,
                ":zip" => $zip,
                ":hashed_pass" => $hashed_pass,
                ":_type" => "admin"
            ));
            if($stmt){
                echo "Successful";
            }
            $stmt = null;
            $pdo = null;
        }
        catch(PDOException $e){
            echo $stmt->errorInfo()[2];
        }

    }
}
?>