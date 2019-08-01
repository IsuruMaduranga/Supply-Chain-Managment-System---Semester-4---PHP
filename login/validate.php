<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 11/28/2018
 * Time: 1:40 PM
 */
session_start();

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    require_once("../inc/pdo.inc.php");
    require_once("../inc/connection.inc.php");
    $pdo = getConnection("guest","guest");

    if ((!(empty($email) || empty($password)) && filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $hashed_password = sha1($password);
        try{
        $sql = "SELECT * FROM login WHERE email = '$email' and password_hash = '$hashed_password'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        } catch(PDOException $e){
            echo $e->getMessage();
        }
        $num_rows = $stmt->rowCount();
        if ($num_rows) {
            $array = $stmt->fetch();
            $_SESSION['uid'] = $array['user_id'];
            $_SESSION['type'] = $array['_type'];

            if (isset($_POST['remember'])) {
                setcookie('uid', $array['uid'], time() + 60 * 60 * 24 * 30, "/");
                setcookie('type', $array['acc_type'], time() + 60 * 60 * 24 * 30, "/");
            }

            switch ($array['_type']) {
                CASE 'customer':
                    header("Location: ../customer");
                    break;

                CASE 'admin':
                    header("Location: ../admin");
                    break;

                CASE 'employee':
                    header("Location: ../employee");
                    break;
            }
        } else {
            $_SESSION['login'] = 'error';
            echo  "wrong credentials";
            header("Location: form.php");
        }
    } else {
        $_SESSION['login'] = 'invalidemail';
        echo "invalid email";
        header("Location: form.php");
    }
}


?>