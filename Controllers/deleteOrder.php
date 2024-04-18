<?php

include 'connexion.php';

$order = $_POST['delete'];
$sql = "DELETE FROM commande WHERE Id_commande = '$order'";
if ($conn->query($sql) === TRUE) {
    header("Location: ../views/aff_com.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
