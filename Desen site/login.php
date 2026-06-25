<?php

include "conexao.php";
session_start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios
        WHERE nome='$nome' AND senha='$senha'";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {

    $_SESSION['usuario'] = $nome;
    header("Location: lojinha.php");
    exit;

} else {
    echo "login errado";
}

?>
