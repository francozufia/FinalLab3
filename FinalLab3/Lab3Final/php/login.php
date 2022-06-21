<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/styleLogin.css">
    <title>Login</title>
</head>

<body>
    <form  action ="../bd/validateLogin.php" method ="POST">
        <h1 class="title">Login</h1>
        <label>
            <span class="material-symbols-outlined">
                account_circle
                <input type="email"  placeholder="Mail" name = "mail"required>
            </span>
        </label>

        <label>
            <span class="material-symbols-outlined">
                key
                <input type="password"  placeholder="Password" name="password" required>
            </span>
        </label>

        <a href="restaureAccount.php">Forgot you password ? </a>

        <button type="submit" class="btnLogin">Login</button>
        
        <a class="button" href="createAccount.php">I dont have acconunt </a>      
        
        <a class="button" href="formAdmin.php">Admin </a>
        
    </form>    
    <?php 
    if(isset($_GET['errLogin'])):?>
    <script  type="text/javascript">
        alert('Error al iniciar sesion ');
    </script>
    <?php endif;?> 
    <?php 
    if(isset($_GET['okLogout'])):?>
    <script  type="text/javascript">
        alert('Gracias por su visita!');
    </script>
    <?php endif;?>
    <?php 
    if(isset($_GET['okRegister'])):?>
    <script  type="text/javascript">
        alert('Cuenta creada!');
    </script>
    <?php endif;?> 
    <?php 
    if(isset($_GET['okUpdate'])):?>
    <script  type="text/javascript">
        alert('Se actualizo la contraseña');
    </script>
    <?php endif;?> 
    
    
    
</body>
</html>