<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/edit.css">
    <title>Edit Order Information - LA7AGLI</title>
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
            <a href="./allOrders.php">
                <div class="button">All Orders</div>
            </a>
            <a href="./landing.php">
                <div class="button" id="log-out">Log Out</div>
            </a>
        </div>
    </nav>
    
    <?php
    include '../controllers/clientSelect.php';
    $id = $_POST['edit'];
    $sql = "SELECT * FROM commande WHERE Id_commande = " . $id;
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();
    ?>

    <form method='post' action='../controllers/updateOrder.php'>
        <input type='hidden' name='id' value='<?= $row["Id_commande"] ?>'>
        <label for="client-id">Client:</label>
        <select name="client-id" id="client-id">
            <?php foreach ($clients as $client): ?>
                <option value="<?= $client['Id_client'] ?>" <?= $client['Id_client'] == $row['Id_client'] ? 'selected' : '' ?>>
                    <?= $client['nom_client'] . " " . $client['prenom_client'] ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" value="<?= $row['quantite'] ?>" />
        <input type="submit" id="submit" value="Update" />
    </form>
</body>

</html>