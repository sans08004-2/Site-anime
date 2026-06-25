<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "tecnime";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("erro na conexao");
}

?>
