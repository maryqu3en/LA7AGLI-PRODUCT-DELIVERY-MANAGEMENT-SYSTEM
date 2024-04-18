<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit client information</title>
</head>

<body>
    <?php 
    include '../controllers/connexion.php';
    $id = $_POST['edit'];
    $sql = "SELECT * FROM client WHERE Id_client = " . $id; 
    $query = $conn->query($sql);
    $row= $query->fetch_assoc();
    ?>

    <form method='post' action='../controllers/updateClient.php'>
        <input type='hidden' name='id' value='<?= $row["Id_client"] ?>'>
        <label for='nom'>Nom:</label><br>
        <input type='text' id='nom' name='nom' value='<?= $row["nom_client"] ?>'><br>
        <label for='prenom'>Prenom:</label><br>
        <input type='text' id='prenom' name='prenom' value='<?= $row["prenom_client"] ?>'><br>
        <label for='adresse'>Adresse:</label><br>
        <input type='text' id='adresse' name='adresse' value='<?= $row["adresse_client"] ?>'><br>
        <label for='telephone'>Telephone:</label><br>
        <input type='text' id='telephone' name='telephone' value='<?= $row["telephone_client"] ?>'><br>
        <input type='submit' value='Update'>
    </form>
</body>

</html>