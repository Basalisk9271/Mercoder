<?php
    session_start();
    if(session_destroy()) {
        $_SESSION['loggedin'] = 0;
        header("Location: /mercoder/bootstrap_folder/index.php");
    }
?>
