<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/homepage.css">
</head>
<body>
    <!-- Main menu section -->
    <div class="nav_section">
    
<img class="logo" src="./images/logo.png">

        <h1>Fox Gaming</h1>
        <div class="nav_hamberguer_menu">
            <div class="hamberguer_menu"></div>
            <div class="hamberguer_menu"></div>
            <div class="hamberguer_menu"></div>
        </div>
    </div>

    <!-- user info section -->

    <?php
    include('db.php');
    
    echo ("welcome ") . $row['firstname'] . "!";
?>
    <a href="login.php">logga ut</a>
    








</body>
</html>
