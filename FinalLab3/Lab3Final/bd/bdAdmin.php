<link rel="stylesheet" href="../css/styleAdmin.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<?php
    require 'conexion.php';
    $userAdmin = "francozufia";
    $user = $_POST['user'];
    $pass = "137902";
    $password = $_POST['password'];

    //logica para saber en base a la cantidad de filas de la base de datos cuantas paginaciones usar
    $articulosPorPagina = 3;
    $count = "SELECT * FROM turnos ";
    $query1 = mysqli_query($conexion, $count);

    if($query1){
        $filas = mysqli_num_rows($query1);
    }
    /* para cantidad paginas */
    $pagina = $filas / $articulosPorPagina; 
    /*redondea el numero*/  
    $pagina = ceil($pagina); 
    /* si se recibe por get una pagina se le asigna a $pag , si no se establece la $pag = 1 */
    if(isset($_GET['pagina'])){
        $pag = $_GET['pagina'];
    }else{
        $pag = 1;
    }

    /* este codigo calcula a parti de que elemento de la base de  empezar a mostrar por paginacion */ 
    $comienzo = ($pag - 1) * $articulosPorPagina;
    if(isset($_GET['order'])){
        $order = $_GET['order'];
    }else{
        $order = 1;
    }

    /* query para mostrar los datos ordenados */
    if($order == 1){
        $sql = " SELECT * FROM turnos ORDER BY id_usuario asc LIMIT $comienzo,$articulosPorPagina";
    }
    if($order == 2){
        $sql = " SELECT * FROM turnos ORDER BY id_usuario desc LIMIT  $comienzo,$articulosPorPagina";
    }
    if($order == 3){
        $sql = " SELECT * FROM turnos ORDER BY dia asc LIMIT  $comienzo,$articulosPorPagina";
    }
    if($order == 4){
        $sql = " SELECT * FROM turnos ORDER BY dia desc LIMIT $comienzo,$articulosPorPagina";
    }
    $query = mysqli_query($conexion,$sql); 

?>    
    <div class="container my-5" id="container">
        <a href="../php/login.php" class = "btn btn-primary ">Back</a>
        <a href="../bd/bdAdmin.php?order=1" class = "btn btn-primary">ID Ascendente</a>
        <a href="../bd/bdAdmin.php?order=2" class = "btn btn-primary">Id Descendente</a>
        <a href="../bd/bdAdmin.php?order=3" class = "btn btn-primary">Fecha Ascendente</a>
        <a href="../bd/bdAdmin.php?order=4" class = "btn btn-primary">Fecha descendente</a>
        <form action="filter.php" method="get" class = "filter">
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">ID</span>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="idBusqueda">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </form>

        <?php while($row = $query->fetch_array()) : ?>
            <?php 
                $id = $row['id_usuario'];
                $dia = $row['dia'];
                $hora = $row['hora'];
            ?>
            <div class="alert alert-success" role="alert">
                <b>ID:</b><?php echo "  ",$id; ?><br>
                <b>Fecha:</b><?php echo"  ", $dia; ?><br>
                <b>Hora:</b><?php echo "  ",$hora; ?><br>
            </div>
        <?php endwhile; ?> 
        <nav>
            <ul class="pagination">
                <?php if($_GET['pagina']>1) : ?>
                <li class="page-item">
                    <a class="page-link" id = "anterior " href ="bdAdmin.php?pagina=<?= $_GET['pagina']-1 ?>&order=<?= $order ?>"> <!--trae la pagina actual y le resta 1 al presionar anterior -->
                        <span aria-hidden="true">&laquo;</span>
                    </a> 
                </li>
                <?php endif; ?>

                <?php for($i = 0 ; $i < $pagina ; $i++):?>
                <li class="page-item">
                    <a class="page-link" href="bdAdmin.php?pagina=<?php echo $i +1 ?>&order=<?= $order ?>">
                        <?php echo $i + 1?>
                    </a>
                </li>
                <?php endfor ?>

                 <?php if($_GET['pagina'] != $pagina):?>
                <li>
                    <a class="page-link" href ="bdAdmin.php?pagina=<?= $_GET['pagina']+1 ?>&order=<?= $order ?>">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                <?php endif;?>
            </ul>
        </nav>
    </div>
<?php 
 mysqli_free_result($query);
 mysqli_close($conexion);
?>