<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/tables.css">
    <title>All Clients - LA7AGLI</title>
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
            <a href="./newClient.php">
                <div class="button">New Client</div>
            </a>
            <a href="./home.php#new-order-form">
                <div class="button">New Order</div>
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
        <form id="search-form" method="post" action="allClients.php">
            <label for="search">Search by first name or family name:</label>
            <input type="text" id="search" name="search">
            <input type="submit" value="Search">
        </form>
        <?php include '../controllers/getClients.php'; ?>
        <div class="test">
            <?php echo $output; ?>
        </div>
    </main>


</body>

</html>