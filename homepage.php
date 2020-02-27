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
    
    session_start();

    $username = $_SESSION ['user__name'];

    echo "<span> Welcome  $username! </span>",  "</br>";
   
    
?>
    <a href="loginform.php">logga ut</a>
    
<style>
    span{
        font-size: 25px;
        letter-spacing: 5px;
        font-weight: bold;
        font-family: 'Arial';
    }
</style>







</body>
</html>
