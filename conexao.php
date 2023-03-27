<?php

require_once("verifica_sessao.php");

$hostname = "localhost";
$database = "reserva_carro";
$user = "root";
$password = "";

$conn = mysqli_connect($hostname, $user, $password, $database);

if (!$conn) {
    die(mysqli_error($sql));
} else {
    $_SESSION["conexao"] = $conn;
}
