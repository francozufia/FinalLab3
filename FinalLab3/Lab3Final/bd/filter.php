<link rel="stylesheet" href="../css/styleAdmin.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<?php 
    require 'conexion.php';
    if($_GET):
        if(isset($_GET['idBusqueda'])){
            $idBusqueda = $_GET['idBusqueda'];
        }
        else{
            $idBusqueda = 0;
        }
    endif;
?>
    <a href="bdAdmin.php" class = "btn btn-primary"> Back</a>
    <div class="container" id="container">
        <?php 
            $filtrado = "SELECT * FROM turnos WHERE id_usuario = '$idBusqueda'";
            $queryFiltrado = mysqli_query($conexion,$filtrado);
        ?>
        <?php while($row = $queryFiltrado->fetch_array()) : ?>
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
            </div>
        <?php endwhile; ?> 
    </div> 

    