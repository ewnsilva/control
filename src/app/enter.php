<?php

require_once __DIR__ . "/../../configurations/bootstrap.php";
require_once __DIR__ . "/../database/login.php";

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: http://localhost/index.php');
}

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

if(login(getConnection(),$email, $senha)){
    header('Location: http://localhost/painel.php');
}
