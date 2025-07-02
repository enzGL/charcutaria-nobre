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
        $validade = $linha['data_validade'];
        $armazenamento = $linha['armazenamento'];
        $lote = $linha['lote'];
    ?>

        <div class="container">
            <div class="row detalhes-produto">
                <div class="col-md-6 text-center">
                    <img src="<?= $foto ?>" class="img-formatada-detalhe" alt="<?= $nome ?>">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center text-center">
                    <h5><?= $nome ?> | <?= $peso ?> KG</h5>
                    <p>Tipo: <?= $tipo ?> | Fornecedor: <?= $fornecedor ?></p>
                    <p>Data de validade: <?= $validade ?></p>
                    <p>Lote: <?= $lote ?></p>
                    <p class="armazenamento">Armazenamento: <?= $armazenamento ?></p>
                    <p class="preco">R$ <?= number_format($preco, 2, ',', '.') ?></p>
                    <button type="button" class="btn-encomenda" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        📲 Deseja fazer uma encomenda? Clique aqui!
                    </button>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Contato 📲</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Entre em contato através dos nossos canais de comunicação</p>
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