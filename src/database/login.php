<?php

require_once __DIR__ . "/../../configurations/connection.php";

function login($conn) {
    $sql_code = "SELECT * FROM register WHERE email = '$email' AND senha = '$senha'";

    $sql_query = $mysqli->query($sql_code) or die ("Falha ao conectar com o banco de dados." . $mysqli->error);

    $result = $sql_query->num_rows;
}
