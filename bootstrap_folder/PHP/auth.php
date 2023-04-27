<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: /mercoder/bootstrap_folder/index.php");
        exit();
    }
?>
