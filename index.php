<?php
include "cabecalho.php";
include "banner.php";
?>

<div class="container">
    <h2 class="display-5">⭐Destaques⭐</h2>

    <div class="row mb-5">
    <?php
        include "conexao.php";
        $sql = "select * from produtos_charcutaria order by preco_unitario asc limit 8";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)){
            $nome = $linha['nome_produto'];
            $foto = $linha['foto'];
            $preco = $linha['preco_unitario']
            ?>
                <div class="col-3 mb-5 text-center">
                    <img src="<?= $foto ?>" class="img-fluid img-formatada">
                    <h3><?= $nome ?></h3>
                    <span class="preco">R$<?= $preco?> <br></span>
                    <a href="detalhes.php?id=<?=$linha['id'];?>" class="btn btn-outline-danger">Ver Detalhes</a>
                </div>
            <?php
            }
    
            mysqli_close($conexao);
            ?>
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
<?php include "rodape.php"; ?>