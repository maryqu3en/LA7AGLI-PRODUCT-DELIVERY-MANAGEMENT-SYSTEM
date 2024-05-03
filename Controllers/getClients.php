<?php
include 'connexion.php';
ob_start();

$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';

$sql = "SELECT * FROM client WHERE Id_user = " . $_SESSION['logged_user']['Id_user'];
if ($searchTerm) {
    $sql .= " AND (nom_client LIKE '%$searchTerm%' OR prenom_client LIKE '%$searchTerm%')";
}
$sql .= " ORDER BY nom_client ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table >
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Family Name</th>
                <th>Adresse</th>
                <th>Phone Number</th>
                <th>Number of Orders</th>
                <th>Total Quantity</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        $sql = "SELECT COUNT(Id_commande) AS total FROM commande WHERE Id_client = " . $row["Id_client"];
        $query = $conn->query($sql);
        $count_orders = $query->fetch_assoc();

        $sql = "SELECT SUM(quantite) AS total FROM commande WHERE Id_client = " . $row["Id_client"];
        $query = $conn->query($sql);
        $count_quantity = $query->fetch_assoc();
        echo "<tr>
                <td>" . $row["Id_client"] . "</td>                
                <td>" . $row["nom_client"] . "</td>
                <td>" . $row["prenom_client"] . "</td>
                <td>" . $row["adresse_client"] . "</td>
                <td>" . $row["telephone_client"] . "</td>
                <td>" . $count_orders['total'] . "</td>
                <td>" . $count_quantity['total'] . "</td>
                <td>
                    <form method='post' action='../views/editClient.php'>
                        <button type='submit' name='edit' value='".$row["Id_client"]."'>Edit</button>
                    </form>
                </td>
                <td> 
                    <form method='post' action='../controllers/deleteClient.php'>
                        <button type='submit' name='delete' value='".$row["Id_client"]."'>Delete</button>
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