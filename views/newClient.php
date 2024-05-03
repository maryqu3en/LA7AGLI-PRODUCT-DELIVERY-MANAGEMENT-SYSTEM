<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/newClient.css">
    <title>New Client - LA7AGLI</title>
</head>

<body>
    <nav>
        <div class="logo">
            <img src="../Public/Images/logo_blue.png" alt="logo" />
            <h1>LA7AGLI</h1>
        </div>
        <div class="product-info">
            <?php include '../controllers/productInfo.php'; ?>
            <h1><?= $product . " " . $price . "DZD" ?></h2>
        </div>
        <div class="nav-buttons">
            <a href="./home.php">
                <div class="button">Home</div>
            </a>
            <a href="./home.php#new-order-form">
                <div class="button">New Order</div>
            </a>
            <a href="./allClients.php">
                <div class="button">All Clients</div>
            </a>
            <a href="./allOrders.php">
                <div class="button">All Orders</div>
            </a>
            <a href="./landing.php">
                <div class="button" id="log-out">Log Out</div>
            </a>
        </div>
    </nav>
    <main>

        <form action="../controllers/createClient.php" method="post">
            <h1>New Client</h1>
            <label for="nom">First Name: </label>
            <input type="text" id="nom" name="nom" required>
            <label for="prenom">Family Name: </label>
            <input type="text" id="prenom" name="prenom" required>
            <label for="address">Address: </label>
            <input type="text" id="address" name="address" required>
            <label for="phone">Phone Number: </label>
            <input type="number" id="phone" name="phone" required>
            <button type="submit">Create Client</button>
        </form>
    </main>

</body>

</html>