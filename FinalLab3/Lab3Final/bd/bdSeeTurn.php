<?php 
    require 'conexion.php';
    require 'verifyLogin.php';

    $id = $_SESSION['id'] ;

    $sql = " SELECT * FROM turnos where id_usuario = '$id' ";
    $query = mysqli_query($conexion,$sql); 
?>
<link rel="stylesheet" href="../css/styleSeeTurn.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container my-5" id="container">
        <a href="../php/home.php" class = "btn btn-primary ">Back</a>
        <?php while($row = $query->fetch_array()) : ?>
            <?php 
                $id = $row['id_usuario'];
                $dia = $row['dia'];
                $hora = $row['hora'];
                $id_turno = $row['id_turno'];
            ?>
            <div class="alert alert-success" role="alert">
                <b>ID:</b><?php echo "  ",$id; ?><br>
                <b>ID turno:</b><?php echo "  ",$id_turno; ?><br>
                <b>Fecha:</b><?php echo"  ", $dia; ?><br>
                <b>Hora:</b><?php echo "  ",$hora; ?><br><br>
                <a href="bdSeeTurn.php?id&id_turno=<?= $id_turno ?>" class="btn btn-danger"> Borrar</a>
            </div>
        <?php endwhile; ?> 
</div> 
<?php 
    if(isset($_GET['id_turno'])){
        try{
            $sql = "DELETE FROM turnos WHERE id_turno = '$id_turno' ";
            $query = mysqli_query($conexion,$sql);
            if($query){  
                header("location:../php/home.php?okErase");             
                mysqli_free_result($query);
                mysqli_close($conexion);
            }
        }
        catch(Exception $e){
            header("location:../php/eraseTurn.php?errErase");
        }  
    } 
   /*  
    else{
        ?>
        <div class="alert alert-warning" role="alert" id="warning">
            No tienes una reserva
        </div>
        <?php
    }*/
?> 
<?php 
 mysqli_free_result($query);
 mysqli_close($conexion);
?>
