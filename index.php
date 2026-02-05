<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body class="Login_body">

    <div class="login-box">
        <div class="login-header">
            <header>Login</header>
        </div>

        <form action="cek_login.php" method="POST">

            <div class="input-box">
                <input type="text" name="username" class="input-field"
                       placeholder="Username" autocomplete="off" required>
            </div>

            <div class="input-box">
                <input type="password" name="password" class="input-field"
                       placeholder="Password" autocomplete="off" required>
            </div>

            <div class="forgot">
                <section>
                    <input type="checkbox" id="check" name="remember">
                    <label for="check">Remember me</label>
                </section>
                <section>
                    <a href="#">Forgot password?</a>
                </section>
            </div>

            <div class="input-submit">
                <button type="submit" class="btn-login">Login</button>
            </div>

        </form>

        <div class="sign-up-link">
            <p>Tidak Punya Akun <a href="#">Sign-up</a></p>
        </div>
    </div>

</body>
</html>
