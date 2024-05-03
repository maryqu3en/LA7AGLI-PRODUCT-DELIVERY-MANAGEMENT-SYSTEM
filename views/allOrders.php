<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/main.css">
    <link rel="stylesheet" href="../public/styles/tables.css">
    <title>All Orders</title>
</head>

<body>
    <nav>
        <div class="logo">
            <img src="../Public/Images/logo_blue.png" alt="logo" />
            <h1>LA7AGLI</h1>
        </div>
        <div class="nav-buttons">
            <a href="./landing.php">
                <div class="nav-button">Landing</div>
            </a>
            <a href="./newClient.php">
                <div class="nav-button">New Client</div>
            </a>
            <a href="./allClients.php">
                <div class="nav-button">All Clients</div>
            </a>
            <a href="./allOrders.php">
                <div class="nav-button">All Orders</div>
            </a>
            <a href="./login.php">
                <div class="nav-button" id="log-out">Log Out</div>
            </a>
        </div>
    </nav>

    <form id="search-form" method="post" action="allOrders.php">
        <label for="search">Search by date:</label>
        <input type="date" id="search" name="search">
        <input type="submit" value="Search">
    </form>

    <?php include '../controllers/getOrders.php'; ?>

    <div class="test">
        <?php echo $output; ?>
    </div>
</body>

</html>