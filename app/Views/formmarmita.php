<div class="row">
        <div class="col-3"></div><!--Essa linha cria a coluna à direita do form-->
        <div class="bg-body-secondary col-6">
            <h3 class="">Escolha o Tamanho da Marmita</h3>
            <!--<form name="cadastro" method="get" action="Clientes/cadastrar" class="p-3">-->
                <?php
                    helper('form');
                    echo form_open("Pedidos/ingredientes");
                ?>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Marmita</label>
                    <select name="marmita" type="nome" class="form-select" id="exampleFormControlInput1" placeholder="José">
                    <?php foreach($marmitas as $marmita): ?>
                    <option value="<?=$marmita->idembalagem?>"><?=$marmita->idembalagem." ". $marmita->nome ?> </option>
                    <?php endforeach?>    
                </select>
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