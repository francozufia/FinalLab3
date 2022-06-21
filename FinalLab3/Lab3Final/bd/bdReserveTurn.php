<?php 
    require "conexion.php";
    require "verifyLogin.php";

    if($_POST){
        $dia = $_POST['dia'];
        $hora = $_POST['hora'];
        $id = $_SESSION ['id'];

        try{
            $sql = "INSERT INTO turnos (dia,hora,id_usuario) VALUES ('$dia','$hora',$id) ";
            $query = mysqli_query($conexion,$sql);

            if($query){  
                header("location:../php/home.php?okTurno");             
                mysqli_free_result($query);
                mysqli_close($conexion);
            }
            else{
                header("location:../php/reserve.php?errTurno");
            }
        }
        catch(Exception $e){
            header("location:../php/reserve.php?errTurno");
        }
        
    }
?>