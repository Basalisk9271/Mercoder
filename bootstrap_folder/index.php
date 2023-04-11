<?php
session_start();

header('Location: home.php');
if(!isset($_SESSION['loggedin'])) {
    $_SESSION['loggedin'] = 0;
    header('Location: home.php'); // don't redirect same page
} 

if ($_SESSION['loggedin'] == 0){
    header('Location: home.php');
}
if ($_SESSION['loggedin'] == 1){
    header('Location: home_stu.php');
}
if ($_SESSION['loggedin'] == 2){
    header('Location: home_tea.php');
}
?>
