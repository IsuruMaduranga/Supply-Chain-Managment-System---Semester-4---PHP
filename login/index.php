<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 11/28/2018
 * Time: 1:30 PM
 */
    session_start();
    if (isset($_SESSION['uid'])){
        $url = "Location: ../{$_SESSION['type']}";
        header($url);
    }
    else if (isset($_COOKIE['uid']) && isset($_COOKIE['type'])){
        $_SESSION['uid'] = $_COOKIE['uid'];
        $type = $_COOKIE['type'];
        switch ($type) {
            case 'customer':
                header("Location: ../parent");
                exit();
                break;

            case 'admin':
                header("Location: ../admin");
                exit();
                break;

            case 'employee':
                header("Location: ../teacher");
                exit();
                break;

            default:
                ECHO "DON'T TRY TO CHEAT!!";
                break;
        }
    }

    else{
        header("Location: form.php");
    }
 ?>