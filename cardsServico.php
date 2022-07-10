<?php

include './petshop-2.0/conexao.php';
include 'cabecalho.php';


if (isset($_POST['busca'])) {
    $pesquisa = $_POST['busca'];
} else {
    $pesquisa = '';
}

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./petshop-2.0/css/cardsServicos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Serviços</title>
</head>

<body class="corpo">
    <div class="menu mb-5">
        <h1 class="titulo">Serviços PET</h1>
        <form class="d-flex mb-3" action="./cardsServico.php" method="POST" style="width: 30%;">
            <input class="form-control me-2" type="search" placeholder="Pesquisa Serviços" aria-label="Search" name="busca" autofocus>
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
        <div>
            <?php
            $sql = $sql = "SELECT * FROM tb_servico WHERE titulo LIKE '%$pesquisa%'";
            $resultado = mysqli_query($con, $sql);
            $sequencia = 0;

            while ($row = mysqli_fetch_assoc($resultado)) {
                $card_id = $row['id_servico'];
                $card_titulo = $row['titulo'];
                $card_descricao = $row['descricao'];
                $card_preco_minimo = $row['preco_minimo'];
                $card_preco_maximo = $row['preco_maximo'];
                $card_especie = $row['especies'];

                if($sequencia==0){
                    echo "<div class='menu-cards mb-5'>";
                    echo "<div class='card' style='width: 18rem;''>
                    <img src='./petshop-2.0/imgs/logo.png' class='card-img-top' alt='logo do site'>
                    <div class='card-body'>
                    <h5 class='card-title'>$card_titulo</h5>
                    <p class='card-text'>$card_descricao</p>
                    <p class='card-text'>Nosso menor preço: <strong>R$ $card_preco_minimo</strong></p>
                    <p class='card-text'>Nosso maior preço: <strong>R$ $card_preco_maximo</strong></p>
                    <a href='./servicos_exibicao.php?id=$card_id' class='btn btn-primary'>Nos contate</a>
                    </div>
                    </div>";
                }elseif($sequencia!=3){
                    echo "<div class='card' style='width: 18rem;''>
                    <img src='./petshop-2.0/imgs/logo.png' class='card-img-top' alt='logo do site'>
                    <div class='card-body'>
                    <h5 class='card-title'>$card_titulo</h5>
                    <p class='card-text'>$card_descricao</p>
                    <p class='card-text'>Nosso menor preço: <strong>R$ $card_preco_minimo</strong></p>
                    <p class='card-text'>Nosso maior preço: <strong>R$ $card_preco_maximo</strong></p>
                    <a href='./servicos_exibicao.php?id=$card_id' class='btn btn-primary'>Nos contate</a>
                    </div>
                    </div>";
                }elseif($sequencia == 3){
                    echo"</div>";
                    echo "<div class='menu-cards mb-5'>";
                    echo "<div class='card' style='width: 18rem;''>
                    <img src='./petshop-2.0/imgs/logo.png' class='card-img-top' alt='logo do site'>
                    <div class='card-body'>
                    <h5 class='card-title'>$card_titulo</h5>
                    <p class='card-text'>$card_descricao</p>
                    <p class='card-text'>Nosso menor preço: <strong>R$ $card_preco_minimo</strong></p>
                    <p class='card-text'>Nosso maior preço: <strong>R$ $card_preco_maximo</strong></p>
                    <a href='./servicos_exibicao.php?id=$card_id' class='btn btn-primary'>Nos contate</a>
                    </div>
                    </div>";
                    $sequencia = 0;
                }
                $sequencia++;
                
            }
            ?>
        </div>

        </div>

    </div>

<?php

include 'rodape.php';

?>

</body>

</html>