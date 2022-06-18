<?php

require_once __DIR__ . "/../../configurations/connection.php";

function login($conn, $email, $senha) {
    $query = "SELECT email FROM register WHERE email = '$email' AND senha = HASH{'$senha'}";

    $statement = $conn->query($query);

    $result = $statement->num_rows;

    var_dump($statement);

    /* if($result = 1){
        header('/pages/home.php');
    } */
}
