<?php 
    include ("../bd/verifyLogin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/styleHome.css">
    <title>Home</title>
</head>
    <nav>
        <label><?= $_SESSION['mail'];?> </label>
        <img id = "fotoPerfil" src="data:image/png;base64, <?= base64_encode($_SESSION['photo'])?>">  
    </nav>
    <div class="container">
        <a class="button" href="reserve.php"> Reserve turn </a>
        <a class="button" href="../bd/bdSeeTurn.php"> See turn </a>
        <a class="button" href="../bd/logout.php"> Log out </a>
    </div>
    <?php 
    if(isset($_GET['okLogin'])):?>
    <script  type="text/javascript">
        alert('Inicio de sesion exitoso');
    </script>
    <?php endif;?> 
    <?php 
    if(isset($_GET['okTurno'])):?>
    <script  type="text/javascript">
        alert('Turno reservado correctamente');
    </script>
    <?php endif;?>
    <?php 
    if(isset($_GET['okErase'])):?>
    <script  type="text/javascript">
        alert('Turno Eliminado Correctamente');
    </script>
    <?php endif;?>
    <?php 
    if(isset($_GET['errErase'])):?>
    <script  type="text/javascript">
        alert('No tiene un turno reservado');
    </script>
    <?php endif;?>
</body>
</html>