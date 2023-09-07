<?php

namespace App\Controllers;

class Pedidos extends BaseController
{
    public function formpedido() 
    {
        echo view('templates/top');
        echo view('cadastropedido');
        echo view('templates/foot');
    }

    public function cadastrar()
    {
        echo('Cadastrar')    ;
    }
}