<?php
include 'connexion.php';

// total quantity
$sql = "SELECT SUM(quantite) AS total FROM commande WHERE Id_user = " . $_SESSION['logged_user']['Id_user']; 
$query = $conn->query($sql);
$total_all= $query->fetch_assoc();  

$sql = "SELECT SUM(quantite) AS total FROM commande WHERE date_commande = CURDATE() && Id_user = " . $_SESSION['logged_user']['Id_user']; 
$query = $conn->query($sql);
$total_jour = $query->fetch_assoc();

// total orders
$sql = "SELECT COUNT(Id_commande) AS total FROM commande WHERE Id_user = " . $_SESSION['logged_user']['Id_user'];
$query = $conn->query($sql);
$count_all = $query->fetch_assoc();

$sql = "SELECT COUNT(Id_commande) AS total FROM commande WHERE date_commande = CURDATE() && Id_user = " . $_SESSION['logged_user']['Id_user'];
$query = $conn->query($sql);
$count_jour= $query->fetch_assoc();

// total price
$price_all = $total_all['total'] * $_SESSION['logged_user']['prix'];
$price_jour = $total_jour['total'] * $_SESSION['logged_user']['prix'];