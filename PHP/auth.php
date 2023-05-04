<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: /mercoder/index.php");
        exit();
    }
?>
