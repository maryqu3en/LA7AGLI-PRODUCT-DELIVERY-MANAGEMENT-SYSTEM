<?php
include 'connexion.php';

$products = array();

$sql = "SELECT * FROM Produit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();