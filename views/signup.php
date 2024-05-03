<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/login.css">
    <link rel="shortcut icon" href="../Public/Images/logo-icon.png" type="image/x-icon" />
    <title>Signup - LA7AGLI</title>
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
            <a href="login.php">
                <div class="button">Log In</div>
            </a>
        </div>
    </nav>
    <main>
        <form action="../controllers/createUser.php" method="post">
            <h1>Sign Up</h1>
            <label for="nom">First name: </label>
            <input type="text" id="nom" name="nom" required>
            <label for="prenom">Family Name: </label>
            <input type="text" id="prenom" name="prenom" required>
            <label for="password">Password: </label>
            <input type="password" id="password" name="psw" required/>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required>
            <label for="produit">Product name: </label>
            <input type="text" id="produit" name="produit" required>
            <label for="prix">Product price: </label>
            <input type="number" id="prix" name="prix" required>
            <button>Create Account</button>
            <p>Already have an account?<a href="login.php">Log in</a></p>
        </form>
    </main>

</body>

</html>