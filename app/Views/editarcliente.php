<html>


<body>
    <div class="row">
        <div class="col-3"></div>
            <div class="bg-body-secondary col-6">
            <h3>Editar Produtos</h3>

            <!--<form name="cadastro" method="get" action="produtos.php" class="p-3">-->
                <?php 
                    helper('form');
                    echo form_open("Clientes/editarclientesubmit");
                ?>
                <input name="idcliente" type="hidden" class="form-control" id="exampleFormControlInput1" value = "<?= $cliente->idcliente ?>">
             <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input name="nome" type="nome" class="form-control" id="exampleFormControlInput1" value="<?= $cliente->nome ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Rua</label>
                    <input name="rua" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?= $cliente->rua ?>">
                </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Número</label>
                                <input name="numero" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?= $cliente->numero ?>">
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Bairro</label>
                                <input name="bairro" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?= $cliente->bairro ?>">
                            </div>
                        </div>
                    </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Referência</label>
                    <input name="referencia" class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?= $cliente->referencia ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                    <input name="telefone" type="preco" class="form-control" id="exampleFormControlInput1" value="<?= $cliente->telefone ?>">
                </div>
                    <a href=<?=site_url("Clientes/todososclientes")?> type="voltar" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </body>
            <?= form_close()?>
       <!-- </form>-->
    </div>
    <div class="col-3"></div>
</div>
</html>