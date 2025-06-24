<?php
include "cabecalho.php";
include "banner.php";
?>

<div class="container">
    <h2 class="display-5">⭐Destaques⭐</h2>

    <div class="row mb-5">
    <?php
        include "conexao.php";
        $sql = "select * from produtos_charcutaria";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)){
            $nome = $linha['nome_produto'];
            ?>
                <div class="col-3 mb-5 text-center">
                    <img src="<?= $linha['foto']; ?>" class="img-fluid img-formatada">
                    <h3><?= $nome ?></h3>
                    <span>⭐<?= $linha['avaliacao']; ?>/10</span>
                </div>
            <?php
            }
    
            mysqli_close($conexao);
            ?>
    </div>
</div>