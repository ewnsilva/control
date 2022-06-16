<?php

require_once __DIR__ . "/../../configurations/bootstrap.php";
require_once __DIR__ . "/../database/login.php";

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

if(empty($email) || empty($senha)){
    echo '<script>alert("Prencha os campos solicitados antes de entrar.")</script>';
    header('Location: http://localhost/index.php');
}
   
if(isset($email) || isset($senha)){

    login($conn);
    
    if($result == 1){
        $user = $sql_query->fetch_assoc();
        header('Location: http://localhost/painel.php');
    } else {
        echo "Falha ao entrar no sistema.";
}
}
