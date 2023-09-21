<?php

namespace App\Controllers;

class Home extends BaseController
{

    private function pedidos()
    {
        $db = db_connect();
        $pedidos = $db->query("SELECT * FROM pedidos")->getResultObject();        
        $db->close();

    return $pedidos;
    }

    public function index(): void
    {
        $pedidos['pedidos']=$this->pedidos();


        echo view('templates/top');
        echo view('index',$pedidos);
        echo view('templates/foot');
    }   
    
}