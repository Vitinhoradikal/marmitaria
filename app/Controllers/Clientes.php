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

        return $this->todososclientes();
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
        $clientes['clientes'] = $this->clientes();
        return view('layouts/listadeclientes',$clientes);

    }

    public function editarcliente($idcliente)
    {
        $params = [
            'idcliente' => $idcliente
        ];

        $db=db_connect();
        $dados = $db->query(
            "SELECT * FROM clientes WHERE idcliente = :idcliente:"
            ,$params)->getResultObject();
        $db->close();

            $data['cliente'] = $dados[0];
            
        echo view('templates/top');
        echo view('editarcliente',$data);
    }

    public function editarclientesubmit()
    {
        $idcliente = $this->request->getPost('idcliente');
        $nome = $this->request->getPost('nome');
        $rua = $this->request->getPost('rua');
        $numero = $this->request->getPost('numero');
        $bairro = $this->request->getPost('bairro');
        $referencia = $this->request->getPost('referencia');
        $telefone = $this->request->getPost('telefone');

        $params = [
            'idcliente' => $idcliente,
            'nome' => $nome,
            'rua' => $rua,
            'numero' => $numero,
            'bairro' => $bairro,
            'referencia' => $referencia,
            'telefone' => $telefone
        ];

        $db = db_connect();
        $db->query("
        UPDATE clientes
        SET 
        nome = :nome:,
        rua = :rua:,
        numero = :numero:,
        bairro = :bairro:,
        referencia = :referencia:,   
        telefone = :telefone:
        WHERE idcliente = :idcliente:
        ", $params);
        $db->close();

        return redirect()->to(site_url('Clientes/todososclientes'));
    }

    public function confirm($idcliente)
     {
        $params=[
            'idcliente' => $idcliente
        ];
    
        $db = db_connect();
        $dados = $db->query("
            SELECT * FROM clientes 
            WHERE idcliente = :idcliente:
        ",$params)->getResultObject();
        $db->close();
    
        $data['cliente'] = $dados[0];
    
        echo view('templates/top');
        echo view('excluirclientesconfirm',$data);
        echo view('templates/foot');
    
    }

    public function excluircliente($idcliente)
    {
        $params =[
            'idcliente' => $idcliente
        ];
        $db = db_connect();
        $db->query("DELETE FROM clientes WHERE idcliente = :idcliente:", $params);
        $db->close();

        return redirect()->to(site_url('Clientes/todososclientes'));
    }
}