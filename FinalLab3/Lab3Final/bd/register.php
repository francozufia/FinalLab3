<?php
    require 'conexion.php';
    
    if($_POST){
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $verifyPassword=$_POST['verifyPassword'];
        $phone = $_POST['phone'];
        
        $image = $_FILES['photo']['tmp_name'];
        $photo = addslashes(file_get_contents($image));
        
        try{
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            
                $sql = "INSERT INTO usuarios (mail,password,phoneNumber,photo) VALUES ('$mail','$password','$phone','$photo') ";
                $query = mysqli_query($conexion,$sql);
        
                if($query){              
                    header("location:../php/login.php?okRegister");
                    mysqli_free_result($query);
                    mysqli_close($conexion);
                }
            }  
        }
        catch(Exception $e){
            header("location:../php/createAccount.php?errRegister");
        }  
    }

?>

