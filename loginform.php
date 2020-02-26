<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>
<body>

<div >
<img class="logo" src="./images/logo.png">
</div>

<form action="login.php" method="post">
        <div class="form">
            <input id="transparent" type="text" name="email" autocomplete="off" required>
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
        <div class="buttons">
        <input type="submit" value="Log In">
        </div>

        <div class="login">
        <span>Don't have an account? </span><a href="signupform.php" class="link">Sign up now.</a>
        </div>
    </form>

    </body>
</html>