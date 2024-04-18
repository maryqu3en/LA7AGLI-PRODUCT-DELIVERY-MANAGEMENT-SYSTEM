<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Public/Styles/landing.css" />
  <link rel="shortcut icon" href="../Public/Images/logo_blue.png" type="image/x-icon" />
  <title>Landing Page - LA7AGLI</title>
</head>

<body>
  <nav>
    <div class="logo">
      <img src="../Public/Images/logo_blue.png" alt="logo" />
      <h1>LA7AGLI</h1>
    </div>
    <div class="nav-buttons">
      <a href="#new-order-form">
        <div class="nav-button">New Order</div>
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

  <main>
    <h2>Statistics</h2>
    <?php include '../controllers/totals.php'; ?>
    <div class="stats">
      <div class="stat" id="price-all">
        <h3 class="total-title">Total Price:</h3>
        <p class="total-value"><?= $price_all ?></p>
      </div>
      <div class="stat" id="total-all">
        <h3 class="total-title">Total Quantity:</h3>
        <p class="total-value"><?= $total_all['total'] ?></p>
      </div>
      <div class="stat" id="count-all">
        <h3 class="total-title">Total Orders:</h3>
        <p class="total-value"><?= $count_all['total'] ?></p>
      </div>
      <div class="stat" id="price-day">
        <h3 class="total-title">Total Price Today:</h3>
        <p class="total-value"><?= $price_jour ?></p>
      </div>
      <div class="stat" id="total-day">
        <h3 class="total-title">Total Quantity Today:</h3>
        <p class="total-value"><?= $total_jour['total'] ?></p>
      </div>
      <div class="stat" id="count-day">
        <h3 class="total-title">Total Orders Today:</h3>
        <p class="total-value"><?= $count_jour['total'] ?></p>
      </div>
    </div>

    <h2>Create Order</h2>
    <form id="new-order-form" action="../controllers/newOrder.php" method="post">

      <?php include '../controllers/userSelect.php'; ?>
      <label for="user-id">User:</label>
      <select name="user-id" id="user-id">
        <option value="<?= $user['Id_user'] ?>">
          <?= $user['nom_user'] . " " . $user['prenom_user'] ?>
        </option>
      </select>
      
      <?php include '../controllers/clientSelect.php'; ?>
      <label for="client-id">Client:</label>
      <select name="client-id" id="client-id">
        <?php foreach ($clients as $client): ?>
          <option value="<?= $client['Id_client'] ?>">
            <?= $client['nom_client'] . " " . $client['prenom_client'] ?>
          </option>
        <?php endforeach; ?>
      </select>
      
      <label for="quantity">Quantity:</label>
      <input type="number" name="quantity" id="quantity" min="1" />
      
      <input type="submit" id="submit" value="Add Order" />
    </form>
  </main>
</body>

</html>