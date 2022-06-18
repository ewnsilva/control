<?php

require_once __DIR__ . "/../../configurations/bootstrap.php";
require_once __DIR__ . "/../database/login.php";

$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');

$login = login(getConnection(), $email, $senha);

/* if(isset($email) || isset($senha)){

    $login = login(getConnection(), $email, $senha);

} */
