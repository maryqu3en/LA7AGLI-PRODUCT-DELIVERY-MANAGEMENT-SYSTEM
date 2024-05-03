<?php
include 'connexion.php';

ob_start();

$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';

$sql = "SELECT * FROM commande WHERE Id_user = " . $_SESSION['logged_user']['Id_user'];
if ($searchTerm) {
    $sql .= " AND date_commande = '$searchTerm'";
}
$sql .= " ORDER BY date_commande DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table >
            <tr>
                <th>ID</th>
                <th>Client Name</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>";
    
    while($row = $result->fetch_assoc()) {
        $sql = "SELECT * FROM client WHERE Id_client = " . $row["Id_client"];
        $query = $conn->query($sql);
        $client = $query->fetch_assoc();
        echo "<tr>
                <td>".$row["Id_commande"]."</td>                
                <td>".$client["nom_client"] . " " . $client["prenom_client"]."</td>
                <td>".$row["date_commande"]."</td>
                <td>".$row["quantite"]."</td>
                <td>".$row["quantite"] * $_SESSION['logged_user']['prix']."</td>
                <td>
                    <form method='post' action='../views/editOrder.php'>
                        <button type='submit' name='edit' value='".$row["Id_commande"]."'>Edit</button>
                    </form>
                </td>
                <td> 
                    <form method='post' action='../controllers/deleteOrder.php'>
                        <button type='submit' name='delete' value='".$row["Id_commande"]."'>Delete</button>
                    </form>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
$output = ob_get_clean();