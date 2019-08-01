<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 11/28/2018
 * Time: 1:43 PM
 */

function getConnection($user,$pass){
    $servername = "localhost";
    $username = $user;
    $password = $pass;

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=sms", $username, $password,array(PDO::ATTR_EMULATE_PREPARES => false));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    catch(PDOException $e) {
        return "Connection failed: " . $pdo->errorInfo(2);
    }
}