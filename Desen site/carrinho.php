<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
    <link rel="stylesheet" href="lojinha.css">
</head>
<body>

<nav>
    <div class="Logo"><a href="TECnime.php">Logo</a></div>

    <ul class="Menu">
        <li><a href="lojinha.php">Voltar à loja</a></li>
        <li><a href="logout.php">Sair</a></li>
    </ul>
</nav>

<h1>Seu Carrinho</h1>

<div id="carrinhoSite">
    <ul id="listaCarrinhoSite"></ul>
    <p>Total: R$ <span id="totalSite">0</span></p>

    <button onclick="finalizarCompra()">Finalizar compra</button>
</div>

<script src="carrinho.js"></script>

</body>
</html>
