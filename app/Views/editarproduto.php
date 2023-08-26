<html>


<body>
    <div class="row">
        <div class="col-3"></div>
            <div class="bg-body-secondary col-6">
            <h3>Editar Produtos</h3>

            <!--<form name="cadastro" method="get" action="produtos.php" class="p-3">-->
                <?php 
                    helper('form');
                    echo form_open("Produtos/editarprodutossubmit");
                ?>
             <input name="idproduto" type="hidden" class="form-control" id="exampleFormControlInput1" value = "<?= $produto->idproduto ?>">   
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input name="nome" type="nome" class="form-control" id="exampleFormControlInput1" value = "<?= $produto->nome ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <input name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3" value = "<?= $produto->descricao ?>">
            </div>
            <div class="row">
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Preço</label>
                <input name="preco" type="preco" class="form-control" id="exampleFormControlInput1" value = "<?= $produto->precovenda ?>" >
            </div>
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label" >Status</label>
                <input name="status" type="status" class="form-control" id="exampleFormControlInput1" value = "<?= $produto->status ?>">
            </div>
            </div>
                <a href=<?=site_url("Produtos/todososprodutos")?> type="voltar" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <button type="reset" class="btn btn-primary">Limpar</button>
            </body>
            <?= form_close()?>
       <!-- </form>-->
    </div>
    <div class="col-3"></div>
</div>
</html>
