<?php

$pdo = new PDO('mysql:host=localhost;dbname=exo_db;charset=utf8', 'root', '');
//sa permet de rajouter une nouvelle entrée qui si on refraiche la page, rajoutera a nouveau la même entrée // 
$pdo->exec('INSERT INTO client(id, nom, prenom, num, email)VALUES(\'""\', \'SMITH\', \'John\', \'0224685976\', \'John89@baba.com\')');

echo 'le client a été ajouté !';
$query =$pdo->query('SELECT*FROM client');
$data=$query->fetchAll(PDO::FETCH_ASSOC);




?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
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
               <td>#<?=$value['id']?></td>
               <td><?=$value['prenom']?></td>
               <td><?=$value['nom']?></td>
               <td>n°<?=$value['num']?></td>
               <td><?=$value['email']?></td>
           </tr> 
          <?php endforeach; ?>
          </body>   
     </table>     
</body>
</html>