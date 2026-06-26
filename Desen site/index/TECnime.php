<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECnime</title>
    <link rel="stylesheet" href="../style/TECnime.css">
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
                <li><a href="login.html"><?php if (empty($_SESSION['usuario'])) { echo 'Login'; } else { echo $_SESSION['usuario']; } ?></a></li>
            </ul>
        </nav>
    </header>
<div class="menulat">
    <aside class="menulat2">
        <ul>
            <li><a href="TECnime.php">Home</a></li>
            <li><a href="lojinha.php">Loja</a></li>
            <li><a href="contato.php">Contato</a></li>
            </ul>
    </aside>

    <div class="carrossel">
        <div class="carrossell">
            <div class="carrosselll">
                <img src="../img/wppskilluadef.jpg" alt="1">
            </div>
            <div class="carrosselll">
                <img src="../img/wppsladef.jpg" alt="2">
            </div>
            <div class="carrosselll">
                <img src="../img/wppevedefa.jpg" alt="3">
            </div>
            <div class="carrosselll">
                <img src="../img/p5wp.png" alt="4">
            </div>
        </div>
        <div class="botoes">
  <button id="esquerda">&#10094;</button>
  <button id="direita">&#10095;</button>
        </div>
    </div>
</div>
<div class="novidades">
<H1>TECnime novidades</H1>
<h3>Fique por dentro de todas as atualizações do universo geek e descubra os melhores produtos no TECnime.</h3>
<div class="novidades">
    <h1>TECnime novidades</h1>
    <h3>Fique por dentro de todas as atualizações do universo geek e descubra os melhores produtos no TECnime.</h3>

    <h2>Últimas Novidades do Mundo Geek</h2>

    <h3>Animes</h3>
    <p>Mushoku Tensei: Jobless Reincarnation - 3ª Temporada (Julho 2026)</p>
    <p>The Elusive Samurai - 2ª Temporada (Julho 2026)</p>
    <p>BLACK TORCH (Julho 2026)</p>
    <p>JoJo's Bizarre Adventure: Steel Ball Run (Março 2026)</p>
    <p>Dorohedoro - 2ª Temporada (Abril 2026)</p>

    <h3>Mangás</h3>
    <p>One Piece - Novo volume previsto para julho de 2026.</p>
    <p>Chainsaw Man - Continuação semanal.</p>
    <p>Blue Box - Novos capítulos em publicação.</p>
    <p>Kagurabachi - Novos capítulos semanais.</p>
    <p>Dandadan - Continuação do arco atual.</p>

    <h3>Action Figures</h3>
    <p>Monkey D. Luffy - Gear 5</p>
    <p>Satoru Gojo - Hollow Purple</p>
    <p>Sung Jin-Woo</p>
    <p>Denji</p>
    <p>Frieren</p>
</div>
</div>
<script src="../script/TECnime.js"></script>

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
</body>
</html>
