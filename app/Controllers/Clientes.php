<?php

namespace App\Controllers;

class Clientes extends BaseController
{
    public function formClientes(): void
    {
        echo view('templates/top');
        echo view('cadastroclientes');
        echo view('templates/foot');
    }

    public function cadastrar()
    {
        $nome = $this->request->getPost('nome');
        $rua = $this->request->getPost('rua');
        $numero = $this->request->getPost('numero');
        $bairro = $this->request->getPost('bairro');
        $referencia = $this->request->getPost('referencia');
        $telefone = $this->request->getPost('telefone');

        $params = [
            'nome' => $nome,
            'rua' => $rua,
            'numero' => $numero,
            'bairro' => $bairro,
            'referencia' => $referencia,
            'telefone' => $telefone
        ];

        $db = db_connect();
        $db->query("INSERT INTO clientes
                    VALUES(
                    0,
                    :nome:,
                    :rua:,
                    :numero:,
                    :bairro:,
                    :referencia:,
                    :telefone:
                    )
                    ", $params);
        $db->close();

        echo "cadastrado";
    }

    private function clientes()
    {
        $db = db_connect();
        $clientes = $db->query("SELECT * FROM clientes")->getResultObject();        
    $db->close();

    return $clientes;
    }

    public function todososclientes()
    {
        $produtos['clientes'] = $this->clientes();
        return view('layouts/listadeclientes',$produtos);

    }

    public function editarcliente()
    {
        echo'editar';
    }

    public function confirm()
     {
        echo'confirm';
    }
}