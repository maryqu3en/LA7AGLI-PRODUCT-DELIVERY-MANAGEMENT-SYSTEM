<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../public/styles/edit.css'>
    <title>Edit Client Information - LA7AGLI</title>
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
    include '../controllers/connexion.php';
    $id = $_POST["edit"];
    $sql = "SELECT * FROM client WHERE Id_client = " . $id;
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();
    ?>

    <form method='post' action='../controllers/updateClient.php'>
        <h1>Edit Client Information</h1>
        <input type='hidden' name='id' value='<?= $row["Id_client"] ?>'>
        <label for='nom'>First Name:</label>
        <input type='text' id='nom' name='nom' value='<?= $row["nom_client"] ?>'>
        <label for='prenom'>Family Name:</label>
        <input type='text' id='prenom' name='prenom' value='<?= $row["prenom_client"] ?>'>
        <label for='adresse'>Adress:</label>
        <input type='text' id='adresse' name='adresse' value='<?= $row["adresse_client"] ?>'>
        <label for='telephone'>Phone Number:</label>
        <input type='text' id='telephone' name='telephone' value='<?= $row["telephone_client"] ?>'>
        <input type='submit' value='Update'>
    </form>
</body>

</html>