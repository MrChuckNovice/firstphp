<?php
// chemin pour appeler les données  de la database //
$pdo = new PDO('sqlite:data-moi.db');

    // pour appeler les données de la table clients//
    $query = $pdo->query('SELECT*FROM clientsmoi');
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher la table clients</title>
</head>
<body>
    <h1>Liste des clients</h1>
    <table>
       <thead>
            <tr>
                <th>id</th>
                <th>prenom</th>
                <th>nom</th>
                <th>num</th>
                <th>email</th>
            </tr>
       </thead>
       <tbody>
        <?php foreach ($data as $value): ?>
        <tr>
            <td>#<?=$value['id'] ?></td>
            <td><?=$value['prenom'] ?></td>
            <td><?=$value['nom'] ?></td>
            <td>n°<?=$value['num'] ?></td>
            <td><?=$value['email'] ?></td>
        </tr>
        <?php endforeach; ?>    
       </tbody>
    </table>           
</body>
</html>

