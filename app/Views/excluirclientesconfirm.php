<div class="container">
    <div class="col text-center">
        <h3>Exluir Cliente?</h3>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <div class="p-2 alert alert-danger">
                <h4 class="">
                    <?= $cliente->nome ?>
                </h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center p-2">
            
                <a href="<?=site_url('Clientes/todososclientes')?>" class=" btn btn-secondary">Não</a>
                <a href="<?=site_url('Clientes/excluircliente/'.$cliente->idcliente)?>" class=" btn btn-primary">Sim</a>
            
        </div>
    </div>
</div>
    
</body>
</html>