<?php
session_start();
include "conexao.php";

if(!isset($_SESSION['usuario'])){
    header("Location: login.html");
    exit;
}

if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = [];
}
if(isset($_POST['finalizar'])){

    if(empty($_SESSION['carrinho'])){
        echo "<script>alert('Carrinho vazio!');</script>";
    } else {
        $_SESSION['carrinho'] = [];
        echo "<script>alert('Compra finalizada com sucesso!'); window.location.reload();</script>";
    }
}
if(isset($_POST['remove'])){
    $index = $_POST['index'];

    if(isset($_SESSION['carrinho'][$index])){
        unset($_SESSION['carrinho'][$index]);
        $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
    }
}
if(isset($_POST['add'])){
    $id = $_POST['id'];

    $sql = "SELECT * FROM produtos WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $produto = $result->fetch_assoc();

    if(!isset($_SESSION['carrinho'][$id])){
        $produto['qtd'] = 1;
        $_SESSION['carrinho'][$id] = $produto;
    } else {
        $_SESSION['carrinho'][$id]['qtd']++;
    }
}
$search = $_GET['q'] ?? '';
if($search != ""){
    $sql = "SELECT * FROM produtos WHERE nome LIKE ?";
    $stmt = $conexao->prepare($sql);
    $like = "%$search%";
    $stmt->bind_param("s", $like);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else {
    $sql = "SELECT * FROM produtos";
    $resultado = $conexao->query($sql);
}
$resultado = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lojinha</title>

<link rel="stylesheet" href="../style/lojinha.css">

</head>

<body>

<header>
<nav>
    <div class="Logo"><a href="TECnime.php">Logo</a></div>

    <form method="GET" class="Pesquisa">
    <input type="text" name="q" placeholder="Pesquisar...">
    <button type="submit">
        <img src="https://cdn-icons-png.flaticon.com/512/622/622669.png">
    </button>
</form>

    <ul class="Menu">
        <li><a href="anunciar.php">Anunciar Produto</a></li>

        <li><a href="login.html"><?= isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Login' ?></a></li>

        <li>
            <div class="btncarrin">
            <a href="#" class="botaoCarrinho" onclick="abrirCarrinho(event)">
                <img src="https://cdn-icons-png.flaticon.com/512/126/126510.png">(
                    <?php 
                        $totalItens =0;

                        if(!empty($_SESSION['carrinho'])){
                            foreach($_SESSION['carrinho'] as $item){
                                $totalItens += $item['qtd'];
                                                                    }
                                                        }

echo $totalItens;
?>)
            </a>
            </div>
        </li>
    </ul>
</nav>
</header>

<div class="lista-produtos">

<?php while($produto = $resultado->fetch_assoc()){ ?>
    <div class="produto">

        <img src="<?= $produto['imagem'] ?>" alt="">

        <h2><?= $produto['nome'] ?></h2>
        <h3><?= $produto['descricao'] ?></h3>
        <p>R$ <?= number_format($produto['preco'],2,",",".") ?></p>

        <form method="POST">
            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
            <button name="add">
                <img src="https://cdn-icons-png.flaticon.com/512/126/126510.png">
            </button>
        </form>

    </div>
<?php } ?>

</div>

<div id="modalCarrinho" class="modal">

<div class="modal-content">

    <span class="close" onclick="fecharCarrinho()">&times;</span>

    <h1>Seu Carrinho</h1>

    <?php $total = 0; ?>

    <?php if(empty($_SESSION['carrinho'])){ ?>
        <p>Carrinho vazio</p>
    <?php } ?>

    <?php if(!empty($_SESSION['carrinho'])): ?>

        <?php foreach($_SESSION['carrinho'] as $id => $item){ ?>

            <div class="item-carrinho">
                <img src="<?= $item['imagem'] ?>" width="60">

                <div>
                    <h4><?= $item['nome'] ?></h4>

                    <p>
                        R$ <?= number_format($item['preco'],2,",",".") ?>
                        <?php if(isset($item['qtd'])) echo " x ".$item['qtd']; ?>
                    </p>
                </div>

                <form method="POST">
                    <input type="hidden" name="index" value="<?= $id ?>">
                    <button name="remove" type="submit">X</button>
                </form>
            </div>

            <?php
                $qtd = $item['qtd'] ?? 1;
                $total += $item['preco'] * $qtd;
            ?>

        <?php } ?>

        <hr>

        <h2>Total: R$ <?= number_format($total,2,",",".") ?></h2>

        <form method="POST">
            <button type="submit" name="finalizar">
                Finalizar compra
            </button>
        </form>

    <?php endif; ?>

</div>

</div>
<script src="../script/carrinho.js"></script>

</body>
</html>