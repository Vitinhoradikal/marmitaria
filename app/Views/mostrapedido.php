<div class="container col-4 alert alert-primary"> 
  <div class="row p-0 alert alert-success">
    <div class="col-12"><h5>Pedido: <?=$dados[0]->idpedido?> </h5></div>
  </div>  

    <div class="row p-0">
      <div class="col-12 alert alert-success">
        <?php  echo($dados[0]->nome.' <br>
                    Endereço: Rua: '. $dados[0]->rua.' nº '.$dados[0]->numero.' Bairro: '.$dados[0]->bairro)?>
      </div>
    </div>

    <div class="row alert alert-dark">
      <div class="col-2"></div>
      <div class="col-10">
        
      </div>
      <?php for($i=0; $i<count($dados); $i++)
        {          
          
          if ($i == 0)
          {
            echo('Marmita: '.$dados[$i]->idmarmitaspedido);
            echo('<div class="row"><div class="col-2></div><div class=col-10">* ' .$dados[$i]->nomeProd.' </div></div><br>');
          }else if ($dados[$i]->idmarmitaspedido == $dados[$i-1]->idmarmitaspedido)
          {
            echo('<div class="row"><div class="col-2></div><div class=col-10">* ' .$dados[$i]->nomeProd.' </div></div><br>');
          }else{
            echo('Marmita: '. $dados[$i]->idmarmitaspedido);
            echo('<div class="row"><div class="col-2></div><div class=col-10">* ' .$dados[$i]->nomeProd.' </div></div><br>');
          }

        }?>
    </div>
</div>
    <?php /*foreach ($dados as $row): ?>
    <div class="col-12"><p><?=$row->idmarmitaspedido?></p></div>
    <?php endforeach?*/?>
  </div>
</div>