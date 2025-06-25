<?php
include "cabecalho.php";

?>
<div class="container">
    <?php
    include "conexao.php";
    $sql = "SELECT * FROM produtos_charcutaria WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    while ($linha = mysqli_fetch_assoc($resultado)) {
        $foto = $linha['foto'];
        $nome = $linha['nome_produto'];
        $preco = $linha['preco_unitario'];
        $tipo = $linha['tipo'];
        $fornecedor = $linha['fornecedor'];
        $peso = $linha['peso_kg'];
    ?>

        <div class="container">
            <div class="row mx-5 mt-5">
                <div class="col">
                    <img src="<?= $foto ?>" class="img-fluid" style="max-width: 500px">
                </div>
                <div class="col text-center fs-3" style="margin-top: 100px;">
                        <h5 class="fs-1"><?= $nome ?></h5>
                        <p>Tipo: <?= $tipo ?></p>
                        <p>Fornecedor: <?= $fornecedor ?></p>
                        <p><?=$peso?> KG</p>
                        <p class="preco">R$ <?=$preco?></p>
                </div>
            </div>

            <button type="button" class="btn btn-danger btn-lg mt-5 fs-5 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 450px">Deseja fazer uma encomenda? Clique aqui!</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Contato 📲</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Ente em contado através dos nossos canais de comunicação</p>
                <p>Email: nobre@nobre.com <br>Whatsapp: (11)99999-9999 <br></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
            </div>
        </div>
    </div>
</div>


        </div>
    <?php
    }
    mysqli_close($conexao);
    ?>
</div>
<?php include "rodape.php"; ?>