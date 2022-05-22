<?php
    require 'conexion.php';

    if($_POST){
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

        $insert = "INSERT INTO usuarios VALUES ('$mail','$password','$phone') ";

        $query = mysqli_query($conexion,$insert);

        if($query){
            echo ' <script language="javascript"> alert( "cuenta creada");   </script>    ';
            header("Location: http://localhost/Lab3Final/php/login.php");
            
        }
        else{
            header("Location: http://localhost/Lab3Final/php/createAcount.php");
            echo ' <script>  alert("error"); </script>  ';
        }
    }
    mysqli_free_result($query);
    mysqli_close($conexion);

?>