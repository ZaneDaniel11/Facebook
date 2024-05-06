<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Page | CodingNepal</title>
    <link rel="stylesheet" href="lib/style/login-style.css">
</head>
<!-- Shesh -->

<body>
    <div class="container flex">
        <div class="facebook-page flex">
            <div class="text">
                <h1>facebook</h1>
                <p>Connect with friends and the world </p>
                <p> around you on Facebook.</p>
            </div>
            <form action="./Code/login/login.php" method="post">
                <input type="text" name="username" placeholder="Email or phone number" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="link">
                    <button type="submit" name="login_btn" class="login">Login</button>
                    <a href="#" class="forgot">Forgot password?</a>
                </div>
                <hr>
                <div class="button">
                    <a href="#">Create new account</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>