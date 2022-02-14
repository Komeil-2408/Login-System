<!-- Main Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register/Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">

        <!-- Main Content -->
        <h3 class="title">Test Login/Register Project</h3>

        <div class="login">
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
        </div>

        <!-- Show Result -->
        <div class="message">
            <?php

                // If Session Set
                session_start();
                if ( isset( $_SESSION['message'] ) ) {
                    echo $_SESSION['message'];
                    session_destroy();
                }
                // If Coockie Set
                elseif ( isset( $_COOKIE['is_loggedin'] ) ) {
                    echo "You Are Logged in !";
                }
            ?>
        </div>
    </div>

</body>
</html>