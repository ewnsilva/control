<?php

require_once __DIR__ . "/../../configurations/bootstrap.php";
require_once __DIR__ . "/../../configurations/connection.php";

/* function login($conn, $enter){
    $query = "SELECT id FROM register WHERE email = {$email}' AND senha = MD5('{$senha}')";

    $result = mysqli_query($conn, $query);

    $row = mysqli_num_row($result);
} */
$email = mysqli_real_escape_string(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = mysqli_real_escape_string(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$query = "SELECT id, email FROM register WHERE email = 
{$email}' AND senha = MD5('{$senha}')";

$statement = $conn->prepare($query);

$result = mysqli_query($conn, $query);

$row = mysqli_num_row($result);

if($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: painel.php');
} else {

}
