 <?= $this->extend('cardapio')?>

<?= $this->section('conteudo');?>
<?php echo view('templates/top.php');?>
<div class="container">  
    <div class="row">
        <div class="col-10"></div>
        <div class="col-2">
            <a class="btn btn-primary" href=<?=site_url("Clientes/formcadastro"); ?> >Novo Produto</a>
        </div>
    </div>
    <div class="row">
            <div class="col p-3"><h3>Cardápio</h3></div>
            <hr>
            <table class="table table-striped table-sm">
                <thead class="table-primary">
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço de venda</th>
                        <th class="text-center">Botões</th>
                    </tr>
                </thead>
                <?php if(count($produtos) == 0):?>
                    <p class="text-center primary"> "Nenhum produto cadastrado.</p>
                <?php else: ?>
                <tbody>
                    <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto->nome ?></td>
                        <td><?= $produto->descricao ?></td>
                        <td><?= $produto->precovenda ?></td>
                        <td class="text-center">
                            <a href="<?= site_url('Produtos/editarproduto/'.$produto->idproduto)?>" class="btn btn-primary btn-sm mx-2" >&#9998;</a> 
                            <a href='<?=  site_url("Produtos/confirm/".$produto->idproduto)?>' class="btn btn-primary btn-sm"> &#10060;</a>
                        </td>
                    </tr>
                        <?php endforeach?>
                </tbody>
            </table>
    </div>
</div>
<?php endif;?>
<?= $this->endSection()?>
