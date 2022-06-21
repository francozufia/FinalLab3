<?php
    session_start();
    if(!isset($_SESSION['id']) or !isset($_SESSION['mail'])){
        header("location:../php/login.php?errLogin");
    }
            
?>