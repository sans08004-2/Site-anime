<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="../style/contato.css">
</head>
<body>
    <header>
        
        <nav>
            <div class="Logo"><a href="TECnime.php">Logo</a></div>
            <ul class="Pesquisa">

                <input type="text" placeholder="Pesquisa">
            <button type="submit">
            <img src="https://cdn-icons-png.flaticon.com/512/622/622669.png" alt="Pesquisar">
            </button>
            </ul>
            <ul class="Menu">
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>
<div class="contato">
    <h1>Contatos</h1>
    <p>Entre em contato conosco através do formulário abaixo:</p>
    <form action="enviar_contato.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="5" cols="30" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
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
</div>
</body>
</html>
