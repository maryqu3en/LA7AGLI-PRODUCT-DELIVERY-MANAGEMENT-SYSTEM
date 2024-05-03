<?php
include 'connexion.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$sql = "INSERT INTO client (nom_client ,prenom_client ,adresse_client,  telephone_client, Id_user) VALUES ('$nom', '$prenom', '$address', '$phone', ".$_SESSION['logged_user']['Id_user'].")";
if ($conn->query($sql) == TRUE) {
    header('Location: ../views/allClients.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();