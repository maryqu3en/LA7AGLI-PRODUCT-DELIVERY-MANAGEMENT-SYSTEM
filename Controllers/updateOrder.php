<?php
include 'connexion.php';

$id = $_POST['id'];
$client_id = $_POST['client-id'];
$quantity = $_POST['quantity'];

$sql = "UPDATE commande 
SET Id_client = '$client_id', 
quantite = '$quantity'
WHERE Id_commande = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../views/allOrders.php');
} else {
    echo "Error updating record: " . $conn->error;
}