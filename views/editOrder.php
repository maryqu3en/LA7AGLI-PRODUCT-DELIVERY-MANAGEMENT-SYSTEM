<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit client information</title>
</head>

<body>
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