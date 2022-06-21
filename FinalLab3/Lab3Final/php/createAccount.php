<!DOCTYPE html>
<html lang="en>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/sytleNewAccount.css">
    <title>Create Account</title>
</head>

<body>
    <form action="../bd/register.php" method="POST" id="form" enctype="multipart/form-data" >
        <h1 class="title">Create Account</h1>
        <label>
            <span class="material-symbols-outlined">
                account_circle
                <input type="email" placeholder="Mail" name= "mail" required>
            </span>
        </label>
        <label>
            <span class="material-symbols-outlined">
                key
                <input type="password" placeholder="Password" name="password" id= "password" minlength="8" required>
            </span>
        </label>

        <label>
            <span class="material-symbols-outlined">
                key
                <input type="password"  placeholder= "Verify password" name="verifyPassword" id = "verifyPassword" minlength="8" required>
            </span>
        </label>

        <label>
            <span class="material-symbols-outlined">
                phone
                <input type="number" id = "phone" placeholder="Phone" name = "phone" required>
            </span>
        </label>

        <label>
            <span class="material-symbols-outlined">
                image
                <input type="file" id = "file"  name = "photo" required >
            </span>
        </label>        

        <button type="submit" class="btnCreateAccount" id = "submit">Create Account</button><br>

        <p id = "alert">No coinciden las contraseñas</p>

    </form>    

    <script src="../js/validacion.js"></script>

    <a class="button" href="home.php"> Home </a>

    <?php 
    if(isset($_GET['errRegister'])):?>
    <script  type="text/javascript">
        alert('No se pudo crear la cuenta');
    </script>
    <?php endif;?> 

</body>
</html>