<?php
include "cabecalho.php";
?>
<div class="container">

    <h2>Todos Produtos</h2>

    <div class="row">
        <?php
        include "conexao.php";
        $sql = "select * from produtos_charcutaria order by nome_produto asc";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
            $nome = $linha['nome_produto'];
            $foto = $linha['foto'];
            $preco = $linha['preco_unitario']
            
        ?>
            <div class="col-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $foto ?>" class="card-img-top img-formatada-lista">
                    <div class="card-body">
                        <h5 class="card-title"><?= $nome ?></h5>
                        <p class="card-text preco">R$<?= $preco ?></p>
                        <a href="detalhes.php?id=<?=$linha['id'];?>" class="btn btn-outline-danger">Ver Detalhes</a>
                    </div>
                </div>
            </div>
        <?php
        }
        mysqli_close($conexao);
        ?>
    </div>
    <?php include "rodape.php"; ?>