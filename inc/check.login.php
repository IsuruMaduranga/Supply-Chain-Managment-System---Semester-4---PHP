<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 11/27/2018
 * Time: 10:37 AM
 */
function checkLogin($type){
    if (isset($_SESSION['uid']) and isset($_SESSION['type'])){
        if($_SESSION['type'] != $type){
            header("Location: /sms/login");
        }
    }
    else{
        header("Location: /sms/login");
    }
}