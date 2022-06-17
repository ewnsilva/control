<?php

require_once __DIR__ . '/configurations/bootstrap.php';

$appName = $_ENV['APP_NAME'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName; ?></title>

</head>

<body>
    
    <h1>Sistema de Controle de Estoque</h1>
    
    <form action="/src/app/access.php" method="POST">
        <input name="email" placeholder="E-mail"></input><br>
        <input name="senha" type="password" placeholder="Senha"></input><br>
        <button type="submit" >Entrar</button>

    </form>
</body>
</html>