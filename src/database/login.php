<?php

require_once __DIR__ . "/../../configurations/connection.php";

function login($conn, $enter) {
    
    $query = "SELECT id FROM register WHERE email = {$email}' AND senha = MD5('{$senha}')";

    $result = mysqli_query($conn, $query);

    $row = mysqli_num_row($result);

    if($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: painel.php');
    } else {

    }

}

