<?php
session_start();
include "conexao.php";

$email = $_POST['nome'] ?? '';   
$senha = $_POST['senha'] ?? '';

$stmt = $conexao->prepare("SELECT nome, senha FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

while ($usuario = $resultado->fetch_assoc()) {
    $ok = password_verify($senha, $usuario['senha'])  
       || $senha === $usuario['senha'];               

    if ($ok) {
        $_SESSION['usuario'] = $usuario['nome'];
        header("Location: lojinha.php");
        exit;
    }
}

echo "login errado";
