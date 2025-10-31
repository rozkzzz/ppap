<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action='login_db.php' method="post">
    <?php if(isset($_SESSION['error'])): ?>
        <div class="error">
            <h3>
                <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </h3>
        </div>
    <?php endif; ?>
        <div class='login_input'>
            <input type="text" placeholder="USERNAME" name="username">
        </div>
        <div class='login_input'>
            <input type="password" placeholder="PASSWORD" name="password">
        </div>
        <div class='login_input'>
            <button type="submit" name="submit">LOGIN</button>
        </div>
    </form>
    <?php include('error.php'); ?>
</body>
</html>