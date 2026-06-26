<?php
session_start();

$carrinho = $_SESSION['carrinho'] ?? [];
$total = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
    <link rel="stylesheet" href="../style/lojinha.css">
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
            <li><a href="lojinha.php">Voltar à loja</a></li>

            <li>
                <a href="carrinho.php" class="botaoCarrinho">
                    <img src="https://cdn-icons-png.flaticon.com/512/126/126510.png">
                </a>
            </li>
        </ul>
    </nav>

</header>
<h1>Seu Carrinho</h1>

<div class="carrinho-container">

<?php if(empty($carrinho)){ ?>
    <p>Carrinho vazio</p>
<?php } ?>

<?php foreach($carrinho as $item){ ?>
    <div class="item-carrinho">

        <img src="<?= $item['imagem'] ?>" width="80">

        <h3><?= $item['nome'] ?></h3>

        <p>R$ <?= number_format($item['preco'],2,",",".") ?></p>

    </div>

    <?php $total += $item['preco']; ?>
<?php } ?>

<hr>

<h2>Total: R$ <?= number_format($total,2,",",".") ?></h2>

</div>

</body>
</html>