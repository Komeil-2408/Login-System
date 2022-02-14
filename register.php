<!-- Register Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
    <!-- Register Form -->
    <form action="actions/user-register.php" method="post">
        name : <input type="text" name="name" required><br>
        mail : <input type="text" name="mail" required><br>
        username : <input type="text" name="username" required><br>
        password : <input type="text" name="password" required><br>

        <input type="submit" value="Register">
    </form>

</body>
</html>