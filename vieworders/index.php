<?php

session_start();

if (isset($_SESSION['uid']) AND isset($_SESSION['type'])) {

    $id = $_SESSION['uid'];
    $type = $_SESSION['type'];

		if($type!='admin'){
            header("Location: user/index.html");
            exit();
        }
        elseif ($type = 'admin'){
            header("Location: all.html");
        }

	}else{
    header("Location: www.youtube.com");
    exit();
}
?>