<?php

require_once ("../inc/pdo.inc.php");
session_start();
$pdo = getConnection("root","");

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
    $_type = $_POST['_type'];
    $salary = $_POST['salary'];
    $password = $_POST['password'];
    $type = "employee";
    

    if (empty($first_name) or empty($last_name) or empty($nic) or empty($email) or empty($add_no) or empty($street) or empty($city1) or empty($zip) or empty($password)or empty($_type)or empty($salary)) {
        $_SESSION['employee_reg'] = 'empty';
        echo "EMPTY FIELDS";
        //header("Location: registration.employee.php");
    } else if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $_SESSION['employee_reg'] = 'invalidemail';
        ECHO "INVALID EMAIL";
        //header("Location: registration.employee.php");

    } else if ((1 === preg_match('~[0-9]~', $first_name)) or (1 === preg_match('~[0-9]~', $last_name))) {
        $_SESSION['employee_reg'] = 'invalidname';
        ECHO "INVALID NAME";
        //header("Location: registration.employee.php");

    } else {
        $hashed_pass = sha1($password);
        try{
            $sql = "INSERT INTO users (first_name,last_name,nic,email,add_no,street,city1,city2,zip,password_hash,_type) VALUES (:first_name,:last_name,:nic,:email,:add_no,:street,:city1,:city2,:zip,:hashed_pass,:_type); INSERT INTO employees (_type,salary) VALUES (:type,:salary)";
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
                ":_type" => "employee",
                ":type" => $_type,
                ":salary" => $salary
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