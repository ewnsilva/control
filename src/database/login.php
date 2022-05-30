<?php

require_once __DIR__ . "/../../configurations/connection.php";

function login($conn, $email, $senha) {
    $mysqli = "SELECT * FROM register WHERE email = '$email' AND senha = MD5('$senha')";

    $result = $mysqli->query($query);

    $row = $result->num_rows;

    if($row == 1) {
        $_SESSION['email'] = $email;
        header('Location: http://localhost/painel.php');
    } else {
        header('Location: http://localhost/index.php');
    }
}
