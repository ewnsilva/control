<?php

require_once __DIR__ . "/../../configurations/bootstrap.php";
require_once __DIR__ . "/src/database/login.php";

if(empty(filter_input('email')) || empty(filter_input('senha'))) {
    header('Location: http://localhost/index.php');
}
    
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

if(filter_input('email')){

    return login(getConnection(),$email, $senha);
/*     $mysqli = "SELECT * FROM register WHERE email = '$email' LIMIT 1";
    $result = $mysqli->query($mysqli) or die ($mysqli->error);

    $user = $result->fetch_assoc();
    if(password_verify($senha, $user['senha'])) */
    

if(login(getConnection(),$email, $senha)){
    header('Location: http://localhost/painel.php');
}
}