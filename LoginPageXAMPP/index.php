<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register/Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box1">
    <form action="register.php" method="post">
        <fieldset class="reg">
            <legend>Register</legend>
            
            <label for="reg-username">Username:</label>
            <input type="text" id="reg-username" name="login" placeholder="Username" required autocomplete="username">

            <label for="reg-password">Password:</label>
            <input type="password" id="reg-password" name="password" placeholder="Password" required autocomplete="new-password">

            <label for="reg-repeat">Repeat Password:</label>
            <input type="password" id="reg-repeat" name="repeat" placeholder="Repeat Password" required autocomplete="new-password">

            <label for="reg-email">Email:</label>
            <input type="email" id="reg-email" name="email" placeholder="Email" required autocomplete="email">

            <button type="submit">Register</button>
        </fieldset>
    </form>
</div>

<div class="box2">
    <form action="login.php" method="post">
        <fieldset class="login">
            <legend>Login</legend>
            
            <label for="login-username">Username:</label>
            <input type="text" id="login-username" name="login" placeholder="Username" required autocomplete="username">

            <label for="login-password">Password:</label>
            <input type="password" id="login-password" name="password" placeholder="Password" required autocomplete="current-password">

            <button type="submit">Login</button>
        </fieldset>
    </form>
</div>

</body>
</html>
