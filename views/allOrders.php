<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/tables.css">
    <title>All Orders</title>
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
            <a href="./allClients.php">
                <div class="button">All Clients</div>
            </a>
            <a href="./landing.php">
                <div class="button" id="log-out">Log Out</div>
            </a>
        </div>
    </nav>

    <main>
        <form id="search-form" method="post" action="allOrders.php">
            <label for="search">Search by date:</label>
            <input type="date" id="search" name="search">
            <input type="submit" value="Search">
        </form>
        <?php include '../controllers/getOrders.php'; ?>
        <div class="test">
            <?php echo $output; ?>
        </div>
    </main>
</body>

</html>