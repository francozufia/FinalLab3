<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/styleAdmin.css">
    <title>Admin</title>
</head>
<body>
<form action ="../bd/bdAdmin.php" method ="POST">
        <h1 class="title">Admin</h1>
        <label>
            <span class="material-symbols-outlined">
                account_circle
                <input type="text" placeholder="User" name = "user" id= "user"required>
            </span>
        </label>

        <label>
            <span class="material-symbols-outlined">
                key
                <input type="password"  placeholder = "Pass" name="password" id = "password"required>
            </span>
        </label>

        <button type="submit" class="button" id= "submit"> Login</button>

        <script src="../js/validacionAdmin.js"></script>
        
        <a href="login.php" class = "button">Back</a>

    </form>    
   
</body>
</html>