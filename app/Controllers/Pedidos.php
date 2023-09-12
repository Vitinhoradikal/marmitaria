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

    public function formpedido() 
    {
        $clientes['clientes']=$this->clientes();
        echo view('templates/top');
        return view('cadastropedido',$clientes);
        
    }

    public function cadastrar()
    {
        echo('Cadastrar')    ;
    }
}