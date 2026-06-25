<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojinha</title>
    <link rel="stylesheet" href="lojinha.css">
</head>
<body>

<header>
    <div id="carrinho" class= "carrinho" style="display:none; position:fixed; right:20px; top:80px; background:#222; color:white; padding:15px; width:250px;">
    
    <h3>Seu Carrinho</h3>

    <ul id="listacarrinho"></ul>

    <p>Total: R$ <span id="total">0</span></p>
    <button onclick="finalizarCompra()">Finalizar compra</button>
    </div>
    <nav>
        <div class="Logo"><a href="TECnime.html">Logo</a></div>

        <ul class="Pesquisa">
            <input type="text" placeholder="Pesquisa">
            <button type="submit">
                <img src="https://cdn-icons-png.flaticon.com/512/622/622669.png" alt="Pesquisar">
            </button>
        </ul>

        <ul class="Menu">
            <li><a href="login.html">Login</a></li>
<li>
    <a href="carrinho.php" class="botaoCarrinho"> 
    <img src="https://cdn-icons-png.flaticon.com/512/126/126510.png">
</a>
</li>
        </ul>
    </nav>
</header>

<h1 class="titulo-categoria">Action Figures</h1>

<div class="carrossel-produtos">

    <button class="voltar">&#10094;</button>

    <div class="lista-produtos">

        <div class="produto">
            <img src="https://placehold.co/200x200" alt="">
            <h2>Naruto</h2>
            <p>R$ 79,90</p>
            <button onclick="adicionarcarrinho('Naruto',79.90)">
                <img src="https://cdn-icons-png.flaticon.com/512/126/126510.png" alt="Adicionar ao carrinho">
            </button>
        </div>

        <div class="produto">
            <img src="https://placehold.co/200x200" alt="">
            <h2>Sasuke</h2>
            <p>R$ 79,90</p>
            <button onclick="adicionarcarrinho('Sasuke',79.90)">
                <img src="https://cdn-icons-png.flaticon.com/512/126/126510.png" alt="Adicionar ao carrinho">
            </button>
        </div>

        <div class="produto">
            <img src="https://placehold.co/200x200" alt="">
            <h2>Itachi</h2>
            <p>R$ 89,90</p>
            <button onclick="adicionarcarrinho('Itachi',89.90)">
                <img src="https://cdn-icons-png.flaticon.com/512/126/126510.png" alt="Adicionar ao carrinho">
            </button>
        </div>

        <div class="produto">
            <img src="https://placehold.co/200x200" alt="">
            <h2>Kakashi</h2>
            <p>R$ 84,90</p>
            <button onclick="adicionarcarrinho('Kakashi',84.90)">
                <img src="https://cdn-icons-png.flaticon.com/512/126/126510.png" alt="Adicionar ao carrinho">
            </button>
        </div>

    </div>

    <button class="avancar">&#10095;</button>

</div>


<h1 class="titulo-categoria">Mangás</h1>

<div class="carrossel-produtos">

    <button class="voltar">&#10094;</button>

    <div class="lista-produtos">

        <div class="produto">
            <img src="https://placehold.co/200x200" alt="">
            <h2>One Piece Vol. 1</h2>
            <p>R$ 29,90</p>
            <button onclick="adicionarcarrinho('One Piece Vol. 1',29.90)">
                <img src="https://cdn-icons-png.flaticon.com/512/126/126510.png" alt="Adicionar ao carrinho">
            </button>
        </div>

        <div class="produto">
            <img src="https://placehold.co/200x200" alt="">
            <h2>Demon Slayer Vol. 1</h2>
            <p>R$ 29,90</p>
            <button onclick="adicionarcarrinho('Demon Slayer Vol. 1',29.90)">
                <img src="https://cdn-icons-png.flaticon.com/512/126/126510.png" alt="Adicionar ao carrinho">
            </button>
        </div>

        <div class="produto">
            <img src="https://placehold.co/200x200" alt="">
            <h2>Jujutsu Kaisen Vol. 1</h2>
            <p>R$ 32,90</p>
            <button onclick="adicionarcarrinho('Jujutsu Kaisen Vol. 1',32.90)">
                <img src="https://cdn-icons-png.flaticon.com/512/126/126510.png" alt="Adicionar ao carrinho">
            </button>
        </div>

    </div>

    <button class="avancar">&#10095;</button>

</div>
    <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  <script src="lojinha.js"></script>
</body>
</html>
