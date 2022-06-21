<?php 
    include ("../bd/verifyLogin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleSeeTurn.css">
    <title>My turn</title>
</head>
<body>
    <?php  include('../bd/bdAdmin.php') ?>

<?php 
    if(isset($_GET['ok'])):?>
    <script  type="text/javascript">
        alert('Esta es tu reserva');
    </script>
<?php endif;?> 

<?php 
    if(isset($_GET['error'])):?>
    <script  type="text/javascript">
        alert('No pudimos encontrar una reserva');
    </script>
<?php endif;?>

</body>
</html>



