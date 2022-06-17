<?php

require_once __DIR__ . "/../../configurations/bootstrap.php";
require_once __DIR__ . "/../database/login.php";

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


if(isset($email) || isset($senha)){

    login(getConnection(), $email, $senha);
    
    if($result == 1){
        $user = $statement->fetch_assoc();
        header('/pages/home.php');
    } else {
        echo "Falha ao entrar no sistema.";
    }

    if(empty($email) || empty($senha)){
    header('Location: http://localhost/index.php');
    }
  
}
