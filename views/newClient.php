<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/sign_up.css">
    <title>Document</title>
</head>
<body>
    <div class="container"> 
    <form action="../controllers/createClient.php" method="post">
        <label for="nom">nom: </label><br/>
        <input type="text" id="nom" name="nom"><br/>
        <label for="prenom">Prenom : </label><br/>
        <input type="text" id="prenom" name="prenom"><br/>
        <label for="address">adresse: </label><br/>
        <input type="text" id="address" name="address"><br/>
         <label for="phone">phone: </label><br/>
        <input type="number" id="phone" name="phone"><br/>
        <button type="submit">Create Client</button>
    </form>
</div>
</body>
</html>