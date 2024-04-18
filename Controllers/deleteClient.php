<?php

include 'connexion.php';

$client = $_POST['delete'];
$sql = "DELETE FROM client WHERE Id_client = '$client'";
if ($conn->query($sql) === TRUE) {
    header("Location: ../views/aff_cl.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
