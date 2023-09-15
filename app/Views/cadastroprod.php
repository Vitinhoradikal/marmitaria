<html>


<body>
    <div class="row">
        <div class="col-3"></div>
            <div class="bg-body-secondary col-6">
            <h3>Cadastrar Produtos</h3>

            <!--<form name="cadastro" method="get" action="produtos.php" class="p-3">-->
                <?php 
                    helper('form');
                    echo form_open("Produtos/cadastrar");
                ?>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input name="nome" type="nome" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <input name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3">
            </div>
            <div class="row">
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Preço</label>
                <input name="preco" type="preco" class="form-control" id="exampleFormControlInput1"  required>
            </div>
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Status</label>
                <input name="status" type="status" class="form-control" id="exampleFormControlInput1" placeholder="0 para inativo ou 1 ativo" required>
            </div>
            </div>
            <div class="mb-3 col-12">
                <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                <input name="categoria" type="categoria" class="form-control" id="exampleFormControlInput1" placeholder="proteina/mistura/acompanhamento/principal" required>
            </div>
                <a href=<?=site_url("Produtos/todososprodutos")?> type="voltar" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="reset" class="btn btn-primary">Limpar</button>
            </body>
            <?= form_close()?>
       <!-- </form>-->
    </div>
    <div class="col-3"></div>
</div>
</html>
