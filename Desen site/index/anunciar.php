<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}

include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];
    $imagem = $_POST['imagem'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO produtos (nome, preco, imagem, categoria, descricao)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sdsss", $nome, $preco, $imagem, $categoria, $descricao);

    if ($stmt->execute()) {
        echo "<script>alert('Produto anunciado com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao anunciar produto.');</script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Anunciar Produto</title>
    <link rel="stylesheet" href="../style/lojinha.css">
</head>
<body>

<div class="anunciar">
    <h1>Anunciar Produto</h1>

    <form method="post">

        <input type="text" name="nome" placeholder="Nome do produto" required>
        <br><br>

        <input type="number" step="0.01" name="preco" placeholder="Preço" required>
        <br><br>

        <input type="text" name="categoria" placeholder="Categoria" required>
        <br><br>

        <input type="text" name="imagem" placeholder="URL da imagem">
        <br><br>

        <textarea name="descricao" placeholder="Descrição do produto"></textarea>
        <br><br>

        <button type="submit">Anunciar</button>

        <button type="button" onclick="window.location.href='lojinha.php'">
            Voltar
        </button>

    </form>
</div>

</body>
</html>