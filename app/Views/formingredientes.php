<?=("Cliente ".$_SESSION['cliente']." marmita ".$_SESSION['marmita']);?>

<div class="row">
        <div class="col-3"></div><!--Essa linha cria a coluna à direita do form-->
        <div class="bg-body-secondary col-6">
            <h3 class="">Escolha os pratos</h3>
            <!--<form name="cadastro" method="get" action="Clientes/cadastrar" class="p-3">-->
                <?php
                    helper('form');
                    echo form_open("Pedidos/inseremarmita");
                ?>
                <div class="form-checkmb-3">
                <?php 
                    echo("<h4>Acompanhamentos:</h4>"); 
                    foreach($ingredientes as $ingrediente):
                        
                    if($ingrediente->categoria == 'acompanhamento'){
                ?>
                    <div class="row">
                        <div class="col">
                            <input name="itens_selecionados[]"value="<?=$ingrediente->nome?>" class="form-check-input" type="checkbox" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"> 
                                <?=$ingrediente->nome?>  
                            </label>            
                        </div>
                    </div>

                <?php 
                    
                    }
                    endforeach;

                    echo("<h4>Proteinas:</h4>");
                    foreach($ingredientes as $ingrediente):
                    if($ingrediente->categoria == 'proteina')
                    {

                ?>   
                            
                     <div class="row">
                        <div class="col">
                            <input name="itens_selecionados[]" value="<?=$ingrediente->nome?>" class="form-check-input" type="checkbox" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"> 
                                <?=$ingrediente->nome?>  
                            </label>            
                        </div>
                    </div> 
                <?php
                    }
                endforeach;
                    echo("<h4>Mistura</h4>");
                    foreach ($ingredientes as $ingrediente):
                        if($ingrediente->categoria == 'mistura')        
                    {  
                    
                ?>  

                    <div class="row">
                        <div class="col">
                            <input name="itens_selecionados[]" value="<?=$ingrediente->nome?>" class="form-check-input" type="checkbox" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"> 
                                <?=$ingrediente->nome?>  
                            </label>            
                        </div>
                    </div> 
                <?php
                    }
                endforeach;
                ?>

                
              <div class="row"><div class="col mb-3"></div></div>
                <a href=<?=site_url("Pedidos/formpedido")?> type="voltar" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-warning">Próximo</button>
                    
                </body>
                <?=form_close()?>
            <!--</form>-->
        </div>
        <div class="col-3"></div><!--Essa linha cria a coluna à esquerda do form-->
    </div>

</html>