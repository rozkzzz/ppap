
<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: login.php');
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link ref="stylesheet" href="style.css">
    <title>HOMEIE</title>
</head>
<body>
    
    <?php if(isset($_SESSION['success'])): ?>
        <div class="success">
            <h3>
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['username'])): ?>
        <p>MTFK welcome to <?php echo $_SESSION['username']; ?></p>
        <p><a href="index.php?logout=1" style="color: red;">LOGOUT</a></p>
    <?php endif; ?>
</body>
</html>