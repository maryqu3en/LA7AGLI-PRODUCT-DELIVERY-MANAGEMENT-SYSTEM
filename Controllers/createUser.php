<?php
include 'connexion.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$password = $_POST['psw'];
$email = $_POST['email'];
$produit = $_POST['produit'];
$prix = $_POST['prix'];

$sql = "INSERT INTO user (nom_user, prenom_user, password_user,email_user,produit,prix) VALUES ('$nom', '$prenom', '$password' , '$email' , '$produit' , '$prix')";
if ($conn->query($sql) === TRUE) {

    $sql = "SELECT * FROM user  WHERE nom_user='$nom' AND prenom_user='$prenom' AND password_user='$password' ";
    $q = $conn->query($sql);
    $user = $q->fetch_assoc();

    $_SESSION['logged_user'] = $user;
    header("Location: ../views/home.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();