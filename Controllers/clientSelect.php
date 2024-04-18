<?php
include 'connexion.php';

$sql = "SELECT * FROM client WHERE Id_user = " . $_SESSION['logged_user']['Id_user'] . " ORDER BY nom_client ASC";
$clients = $conn->query($sql);
