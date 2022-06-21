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
    <link rel="stylesheet" href="../css/reserve.css">
    <title>Reserve</title>
</head>
<body>
    <div>
        <a class="button" href="home.php"> Home </a>
        <form action="../bd/bdReserveTurn.php" method="post">
            <h1 class="title">Reserve</h1>
            <label>
                <span class="material-symbols-outlined">
                    calendar_month
                    <input type="date" id = "date" placeholder="Date" name = "dia" required>
                </span>
            </label>
            <label>
                <span class="material-symbols-outlined">
                    schedule
                    <input type="time"  id = "dateTime" name = "hora" required>
                </span>
            </label>

            <button type="submit">Submit</button>
        </form>  
       
    </div>  

    <?php 
    if(isset($_GET['errTurno'])):?>
    <script  type="text/javascript">
        alert('Error al reservar el turno.');
    </script>
    <?php endif;?> 
</body>
