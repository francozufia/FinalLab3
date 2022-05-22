<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="http://localhost/Lab3Final/css/styleLogin.css">
    <title>Login</title>
</head>

<body>
    <form  action ="../bd/verifyLogin.php" method ="post">
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

        <a href="http://" target="_blank" rel="noopener noreferrer">Forgot you password?</a>

        <button type="submit" class="btnLogin">Login</button>

       
        <button type="button" class="btnNoCount"> I dont have acconunt </button>
        
        
    </form>    

</body>
</html>