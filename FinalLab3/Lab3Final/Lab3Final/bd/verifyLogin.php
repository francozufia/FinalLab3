<?php
    require 'conexion.php';

    if($_POST){
        

        $mail = $_POST['mail'];
        $password = $_POST['password'];
        
        $session_start();
        $SESSION['mail'] = $mail;


        $verifyLogin = "SELECT * FROM usuarios WHERE mail = '$mail' AND password = '$password'";

        $query = mysqli_query($conexion,$verifyLogin);

        $rows = mysqli_num_rows($query);

        if($rows){
            header("Location: http://localhost/Lab3Final/php/reserve.php");
        }
        else{
            header("Location: http://localhost/Lab3Final/php/login.php");
            echo " <script>alert('Please enter user and password again'); </script>  ";
        } 
    }
    mysqli_free_result($query);
    mysqli_close($conexion);
    

?>