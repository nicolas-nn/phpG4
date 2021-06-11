<?php
$users = [
    ["name"=>'Audrey',
    'color'=>'red',
    'age'=>23],
    ['name'=>'Octavia',
    'color'=>'blue',
    'age'=>22],
    ['name'=>'Fanny',
    'color'=>'orange',
    'age'=>29]
];
//var_dump($users);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/users.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
</head>
<body>
    <?php
    include('index.html')?>
    <h1 class=tocenter>Listing de la clientèle</h1>
    <table class=tocenter>
        <th style=color:red>Prénom</th>
        <th style=color:purple>Couleur</th>
        <th style=color:green>Age</th>
        <?php foreach($users as $user):?>
            <tr>
            <td style=background-color:red><?= $user['name']?></td>
            <td style=background-color:purple><?= $user['color']?></td>
            <td style=background-color:green><?= $user['age']?></td>
            </tr>
        <?php endforeach?>
        
    </table>
</body>
</html>