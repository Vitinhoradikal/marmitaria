<div class="container">
    <div class="col text-center">
        <h3>Exluir Produto?</h3>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <div class="p-2 alert alert-danger">
                <h4 class="">
                    <?= $produto->nome ?>
                </h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center p-2">
            
                <a href="<?=site_url('Produtos/todososprodutos')?>" class=" btn btn-secondary">Não</a>
                <a href="<?=site_url('Produtos/excluirproduto/'.$produto->idproduto)?>" class=" btn btn-primary">Sim</a>
            
        </div>
    </div>
</div>
    
</body>
</html>