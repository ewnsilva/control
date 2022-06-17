<?php

require_once __DIR__ . "/../../configurations/connection.php";

function login($conn, $email, $senha) {
    $query = "SELECT * FROM register WHERE email = '$email' AND senha = '$senha'";

    $statement = $conn->query($query) or die ("Falha ao conectar com o banco de dados." . $conn->error);

    $result = $statement->num_rows;

    return $result;
}
