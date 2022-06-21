<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/styleRestaureAccount.css">
    <title>Restaure Acount</title>
</head>

<body>
   
    <form action ="../bd/bdRestaureAccount.php" method ="post">
        <h1 class="title">Restaure Acount</h1>
        <label>
            <span class="material-symbols-outlined">
                account_circle
                <input type="email"  placeholder="Mail" name="mail"required>
            </span>
        </label>

        <label>
            <span class="material-symbols-outlined">
                key
                <input type="password"  placeholder="Enter new password" name="password" id="password" minlength="8" required>
            </span>
        </label>

        <label>
            <span class="material-symbols-outlined">
                key
                <input type="password"  placeholder="Repeat new password" name="verifyPassword" id="verifyPassword" minlength="8" required>
            </span>
        </label>

        <button type="submit" class="btnRestaure">Restaure</button>
        
    </form>    
    <a class="button" href="home.php"> Home </a>

    <?php 
    if(isset($_GET['errorUpdate'])):?>
    <script  type="text/javascript">
        alert('No se pudo actualizar la contraseña');
    </script>
    <?php endif;?>
   
</body>
</html>