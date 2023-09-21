<?php

namespace App\Controllers;

class Pedidos extends BaseController
{
   

    private function clientes()
    {
        $db = db_connect();
        $clientes = $db->query("SELECT * FROM clientes")->getResultObject();        
    $db->close();

    return $clientes;
    }

    private function marmitas()
    {
        $db = db_connect();
        $marmitas = $db->query("SELECT * FROM marmitas")->getResultObject();        
    $db->close();

    return $marmitas;
    }

    private function produtos()
    {
        $db = db_connect();
        $ingredientes = $db->query("SELECT * FROM produtos")->getResultObject();        
        $db->close();

    return $ingredientes;
    }

    public function formpedido() 
    {
        $clientes['clientes']=$this->clientes();
        
        
        echo view('templates/top');
        return view('cadastropedido',$clientes);
        
    }

    public function marmita()
    {        
        $marmitas['marmitas']=$this->marmitas();

        session_start();
        $_SESSION['cliente']= $this->request->getPost('nome');

        echo view('templates/top');
        echo("Cliente->".$_SESSION['cliente']);
        echo view('formmarmita',$marmitas);
    }

    public function ingredientes()
    {
        $ingredientes ['ingredientes'] = $this->produtos();

        session_start();
        $_SESSION['marmita'] = $this->request->getPost('marmita');;
        
        echo view('templates/top');
        //echo("Marmita-> ".$_SESSION['marmita']);
        echo view ('formingredientes',$ingredientes);
    }

    public function inseremarmita()
    {
        session_start();

        $cliente = $_SESSION['cliente'];
        $marmita = $_SESSION['marmita'];
      
        //recebe os ítens do submit
        $pedido = $this->request->getPost('itens_selecionados');
        
        $params = [
            'idcliente'     =>$cliente,
            'datapedido'    => date('y/m/d h:m:s:u'),
            'valorpedido'   => 0,
            'status'        =>"analise"
        ];      

        $db = db_connect();
        //insere os detalhes do pedido na tabela pedidos   
        $db->query("INSERT INTO pedidos
                     VALUES (
                     0, 
                     :idcliente:,
                     :datapedido:,
                     :valorpedido:,
                     :status:)",
                     $params);    

        $numpedido=$db->insertID();
        
        $params2 = [
            'pedido' =>$numpedido,
            'marmita'=>$marmita,
            'produtos'=>$pedido
        ];
      
# Chama a função que vincula o pedido a uma marmita
        $this->cadastraprodutos($params2);
        $db->close();
    }

#Essa função vincula o pedido a uma marmita
    public function cadastraprodutos($dados)
    {
        $pedido = $dados['pedido'];
        $marmita = $dados['marmita'];

       $db=db_connect();
            $db->query("INSERT INTO marmitasdopedido
                    VALUES (0,
                            '$pedido',
                            '$marmita'
                            )
                            ");
#Insere os produtos na tabela produtos da marmita e vincula a uma marmita específica
#essa linha recupera o número da última marmita inserida no banco de dados
$idmarmita=$db->insertID();
        for($i = 0; $i < count($dados['produtos']); $i++)
        {
            $db->query("INSERT INTO produtosdamarmita
                        VALUE (0,
                        '{$dados['produtos'][$i]}',
                        '$idmarmita'
                        )
                        ");
            $db->close;
        }
        echo view('templates/top');
        echo("Pedido Cadastrado com sucesso");
    }

    public function apresentapedido($idpedido)
    {
        $params = 
                [
                    'idpedido' => $idpedido
                ];
        $db=db_connect();
        $pedido = $db->query("SELECT * FROM pedidos
                            WHERE idpedido = :idpedido:",
                            $params)->getResultObject();
        $db->close();
        #print_r($pedido);
        return $pedido;
    }
}