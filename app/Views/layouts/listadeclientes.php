<?= $this->extend('cardapio')?>

<?= $this->section('conteudo');?>
<?php echo view('templates/top.php');?>
<div class="container">  
    <div class="row">
        <div class="col-10"></div>
        <div class="col-2">
            <a class="btn btn-primary" href=<?=site_url("Clientes/formclientes"); ?> >Novo Cliente</a>
        </div>
    </div>
    <div class="row">
            <div class="col p-3"><h3>Clientes</h3></div>
            <hr>
            <table class="table table-striped table-sm">
                <thead class="table-primary">
                    <tr>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th class="text-center">Botões</th>
                    </tr>
                </thead>
                <?php if(count($clientes) == 0):?>
                    <p class="text-center primary"> "Nenhum cliente cadastrado.</p>
                <?php else: ?>
                <tbody>
                    <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= $cliente->nome ?></td>
                        <td><?= 'Rua: '.$cliente->rua .' nº: '. $cliente->numero.' Bairro: '. $cliente->bairro.' Referência: '.$cliente->referencia ?></td>
                        <td><?= $cliente->telefone ?></td>
                        <td class="text-center">
                            <a href="<?= site_url('Clientes/editarcliente/'.$cliente->idcliente)?>" class="btn btn-primary btn-sm mx-2" >&#9998;</a> 
                            <a href='<?=  site_url('Clientes/confirm/'.$cliente->idcliente)?>' class="btn btn-primary btn-sm"> &#10060;</a>
                        </td>
                    </tr>
                        <?php endforeach?>
                </tbody>
            </table>
    </div>
</div>
<?php endif;?>
<?= $this->endSection()?>
