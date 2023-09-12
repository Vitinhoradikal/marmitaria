<div class="row">
        <div class="col-3"></div><!--Essa linha cria a coluna à direita do form-->
        <div class="bg-body-secondary col-6">
            <h3 class="">Pedido</h3>
            <!--<form name="cadastro" method="get" action="Clientes/cadastrar" class="p-3">-->
                <?php
                    helper('form');
                    echo form_open("Pedidos/cadastrar");
                ?>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Cliente</label>
                    <select name="nome" type="nome" class="form-select" id="exampleFormControlInput1" placeholder="José">
                    <?php foreach($clientes as $cliente): ?>
                    <option><?= $cliente->nome ?> </option>
                    <?php endforeach?>    
                </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Rua</label>
                    <textarea name="rua" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Número</label>
                                <textarea name="numero" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Bairro</label>
                                <textarea name="bairro" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                        </div>
                    </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Referência</label>
                    <textarea name="referencia" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                    <input name="telefone" type="preco" class="form-control" id="exampleFormControlInput1" placeholder="00000000000">
                </div>
                <a href=<?=site_url("Home/index")?> type="voltar" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </body>
                <?=form_close()?>
            <!--</form>-->
        </div>
        <div class="col-3"></div><!--Essa linha cria a coluna à esquerda do form-->
    </div>

</html>