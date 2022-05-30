<?php

require_once __DIR__ . "/../../configurations/bootstrap.php";

if(empty(filter_input('email')) || empty(filter_input('senha'))) {
    header('Location: http://localhost/index.php');
}

if(filter_input('email')){

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    $mysqli = "SELECT * FROM register WHERE email = '$email' LIMIT 1";
    $result = $mysqli->query($mysqli) or die ($mysqli->error);

    $user = $result->fetch_assoc();
    

if(login(getConnection(),$email, $senha)){
    header('Location: http://localhost/painel.php');
}
}