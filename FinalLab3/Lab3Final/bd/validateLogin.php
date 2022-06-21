<?php
    require 'conexion.php';
    session_start();
    if($_POST){
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM usuarios where mail = '$mail' and password = '$password'";
        $query = mysqli_query($conexion,$sql);
        $row = mysqli_fetch_assoc($query);   //convierte el sql en arreglo asociativo

        $_SESSION['mail'] = $mail;
        $_SESSION['id'] = $row['id'];
        $_SESSION['photo'] = $row['photo'];

        if($row){
            header("location:../php/home.php?okLogin");
            mysqli_free_result($query);
            mysqli_close($conexion);
        }
        else{
            header("location:../php/home.php?errLogin");   
        }
    }
  ?>