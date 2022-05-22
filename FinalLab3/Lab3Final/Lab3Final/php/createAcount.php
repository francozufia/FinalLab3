<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="http://localhost/Lab3Final/css/sytleNewAccount.css">
    <title>Create Account</title>
</head>

<body>
    <form action="../bd/register.php" method="post">
        <h1 class="title">Create Account</h1>
        <label>
            <span class="material-symbols-outlined">
                account_circle
                <input type="email" id = "username" placeholder="Mail" name= "mail" required>
            </span>
        </label>
        <label>
            <span class="material-symbols-outlined">
                key
                <input type="password" id = "password" placeholder="Password" name="password" required>
            </span>
        </label>
        <label>
            <span class="material-symbols-outlined">
                phone
                <input type="number" id = "phone" placeholder="Phone" name = "phone" required>
            </span>
        </label>


        <button type="submit" class="btnCreateAccount">Create Account</button>
    
    </form>    

</body>
</html>