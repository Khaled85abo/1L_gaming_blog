<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div >
<img class="logo" src="./images/logo.png">
</div>

<form action="signup.php" method="POST">
        <div class="form">
            <input type="text" name="firstname" autocomplete="off" required>
            <label for="name" class="label-name">
            <span class="content-name">Firstname</span>
        </label>
        </div>
        <div class="form">
            <input type="text" name="lastname" autocomplete="off" required>
            <label for="address" class="label-name">
            <span class="content-name">Lastname</span>
        </label>
        </div>
        <div class="form">
            <input type="text" name="email" autocomplete="off" required>
            <label for="email" class="label-name">
            <span class="content-name">E-mail</span>
        </label>
        </div>
        <div class="form">
            <input type="password" name="password" autocomplete="off" required>
            <label for="password" class="label-name">
            <span class="content-name">Password</span>
        </label>
        </div>
        <div class="form">
            <input type="password" name="confirm_password" autocomplete="off" required>
            <label for="confirm_password" class="label-name">
            <span class="content-name">Confirm password</span>
        </label>
        </div>
        <div class="buttons">
        <input type="submit" value="Sing Up">
        </div>

        <div class="login">
        <span>Already have an account? </span><a href="login.php" class="link">Login here.</a>
        </div>
    </form>