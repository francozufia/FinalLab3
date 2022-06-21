<?php
    require 'conexion.php';

    if($_POST){
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $verifyPassword = $_POST['verifyPassword'];

        if($verifyPassword == $password){
            $sql = "UPDATE usuarios SET mail = '$mail' , password = '$password' WHERE mail = '$mail'";

            $query = mysqli_query($conexion,$sql);

            if($query){
                header("Location:../php/login.php?okUpdate");
                mysqli_free_result($query);
                mysqli_close($conexion);
            }    
        }
        else{
            header("Location:../php/restaureAccount.php?errorUpdate");
        }   
     
    }   
?>