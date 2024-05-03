<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $psw = $_POST['password'];

    $sql = "SELECT * FROM user  WHERE nom_user='$nom' AND prenom_user='$prenom' AND password_user='$psw' ";
    $q = $conn->query($sql);
    $user = $q->fetch_assoc();
    if (!$user) {
        echo ("<p style='text-align: center; font-size: 2em;'>Cannot find user. Enter valid user information.</p>");
        echo '<meta http-equiv="refresh" content="2; url=../views/login.php" />';
    } else {
        $_SESSION['logged_user'] = $user;
        header("Location: ../views/home.php");
        exit;
    }
}
$conn->close();
