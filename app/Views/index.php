<div class="container">
    <div class="row">
        <div class="col-10"></div>
        <div class="col-2 p-4"><a class="btn btn-primary" href="<?=site_url('Pedidos/formpedido')?>">Novo Pedido</a></div>
    </div>
    <div class="row">
        <div class="col-4 alert alert-danger">
            <h4 class="display-6">Novos Pedidos</h4><hr>
            <?php foreach($pedidos as $pedido){
                   if($pedido->status == 'analise'){
                    echo("<h5><a class='alert-link' href='".site_url('Pedidos/mostrarpedido/'.$pedido->idpedido)."'>Pedido $pedido->idpedido</a></h5>");

                    $db=db_connect();
                    $clientes=$db->query("SELECT * FROM clientes WHERE idcliente=$pedido->idcliente")->getResultObject();
                    $db->close();

                    $cliente = $clientes[0];
                    
                    echo("<p>Cliente: $pedido->idcliente $cliente->nome <hr>");
                    //var_dump($cliente);
                    
                   } 
                };
            ?>

        </div>
        <div class="col-4 alert alert-warning">
            <h4 class="display-6">Em Produção</h4><hr>
            <?php foreach($pedidos as $pedido){
                   if($pedido->status == 'producao'){
                    echo("<h5><a class='alert-link' href='".site_url('Pedidos/mostrarpedido/'.$pedido->idpedido)."'>Pedido $pedido->idpedido</a></h5>");
                    
                    $db=db_connect();
                    $clientes=$db->query("SELECT * FROM clientes WHERE idcliente=$pedido->idcliente")->getResultObject();
                    $db->close();

                    $cliente = $clientes[0];
                    
                    echo("<p>Cliente: $pedido->idcliente $cliente->nome<hr>");
                    //var_dump($cliente);
                    
                   } 
                };
            ?>
        </div>
        <div class="col-4 alert alert-success">
            <h4 class="display-6">Prontos</h4><hr>
            <?php foreach($pedidos as $pedido){
                   if($pedido->status == 'entrega'){
                    echo("<h5><a class='alert-link' href='".site_url('Pedidos/mostrarpedido/'.$pedido->idpedido)."'>Pedido $pedido->idpedido</a></h5>");
                    
                    $db=db_connect();
                    $clientes=$db->query("SELECT * FROM clientes WHERE idcliente=$pedido->idcliente")->getResultObject();
                    $db->close();

                    $cliente = $clientes[0];
                    
                    echo("<p>Cliente: $pedido->idcliente $cliente->nome <hr>");
                    //var_dump($cliente);
                    
                   } 
                };
            ?>
        </div>
    </div>
</div>