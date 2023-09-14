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
        echo("Marmita-> ".$_SESSION['marmita']);
        echo view ('formingredientes',$ingredientes);
    }
}