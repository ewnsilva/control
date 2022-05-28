<?php

require_once __DIR__ . "/../../configurations/bootstrap.php";


if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: http://localhost/index.php');
}
