<?php
include 'connexion.php';

$user_id = $_POST['user-id'];
$client_id = $_POST['client-id'];
$quantity = $_POST['quantity'];
$date = date('Y-m-d');

$sql = "INSERT INTO commande (Id_user, Id_client, quantite, date_commande) VALUES ('$user_id', '$client_id', '$quantity', '$date')";
if ($conn->query($sql) === TRUE) {
    header('Location: ../Views/home.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
