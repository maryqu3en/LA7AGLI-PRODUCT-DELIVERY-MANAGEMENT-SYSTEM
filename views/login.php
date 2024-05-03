<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/login.css">
    <link rel="shortcut icon" href="../Public/Images/logo-icon.png" type="image/x-icon" />
    <title>Login - LA7AGLI</title>
</head>

<body>
    <nav>
        <div class="logo">
            <img src="../Public/Images/logo_blue.png" alt="logo" />
            <h1>LA7AGLI</h1>
        </div>
        <div class="nav-buttons">
            <a href="landing.php">
                <div class="button">Back</div>
            </a>
            <a href="signup.php">
                <div class="button">Sign Up</div>
            </a>
        </div>
    </nav>
    <main>
        <form action="../controllers/login.php" method="post">
            <h1>Login</h1>
            <label for="nom">First name:</label>
            <input type="text" id="nom" name="nom" required>
            <label for="prenom">Family name:</label>
            <input type="text" id="prenom" name="prenom" required>
            <label for="psw">Password:</label>
            <input type="password" id="psw" name="password" required>
            <button>Login</button>
            <p>Dont have an account?<a href="signup.php">Sign up</a></p>
        </form>
    </main>

</body>

</html>