<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../public/styles/home.css" />
  <link rel="shortcut icon" href="../Public/Images/logo-icon.png" type="image/x-icon" />
  <title>Home - LA7AGLI</title>
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
      <a href="#new-order-form">
        <div class="button">New Order</div>
      </a>
      <a href="./newClient.php">
        <div class="button">New Client</div>
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
    <div class="order-form-image">
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
        <input type="number" name="quantity" id="quantity" min="1" value="1"/>
      
        <input type="submit" id="submit" value="Add Order" />
      </form>
      <img src="../public/images/delivery.png" alt="delivery">
    </div>
  </main>
</body>

</html>