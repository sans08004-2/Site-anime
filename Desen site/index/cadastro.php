<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];

    if (empty($nome) || empty($email) || empty($senha) || empty($senha2)) {
        echo "<script>
            alert('Todos os campos são obrigatórios.');
            window.history.back();
        </script>";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
            alert('Email inválido.');
            history.back();
        </script>";
        exit();
    }


    if (!ctype_alnum($senha)) {
        echo "<script>
            alert('A senha deve conter apenas letras e números.');
            history.back();
        </script>";
        exit();
    }

    if (strlen($senha) < 8) {
        echo "<script>
            alert('A senha deve ter pelo menos 8 caracteres.');
            history.back();
        </script>";
        exit();
    }


    if ($senha !== $senha2) {
        echo "<script>
            alert('As senhas não coincidem.');
            history.back();
        </script>";
        exit();
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha)
            VALUES ('$nome', '$email', '$senhaHash')";

    if ($conexao->query($sql)) {
        header("Location: login.html");
        exit();
    } else {
        echo "Erro ao cadastrar";
    }
}
?>