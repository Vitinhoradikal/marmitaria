<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;
use mysqli;

class Produtos extends BaseController
{
    public function formcadastro()
    {
        echo view('templates/top');
        echo view('cadastroprod');
        echo view('templates/foot');
    }

    public function cadastrar() 
    {
        $nome = $this->request->getPost('nome');
        $descricao = $this->request->getPost('descricao');
        $precodevenda = $this->request->getPost('preco');
        $status = $this->request->getPost('status');
        $categoria = $this->request->getPost('categoria');

        $params = [
            'nome' => $nome,
            'descricao' => $descricao,
            'precovenda' => $precodevenda,
            'status' => $status,
            'alteracao' => date("Y-m-d H:i:s.u"),
            'categoria' => $categoria
        ];

        $db = db_connect();
        $db->query("INSERT INTO produtos
                    VALUES(
                    0,
                    :nome:,
                    :descricao:,
                    :precovenda:,
                    :status:, 
                    :alteracao:,
                    :categoria:                   
                    )
                    ", $params);
        $db->close();

        return redirect()->to(site_url('Produtos/todososprodutos'));
       
        
    }

    private function produtos()
    {
        $db = db_connect();
            $produtos = $db->query("SELECT * FROM produtos")->getResultObject();        
        $db->close();

        return $produtos;
    }

    public function todososprodutos()
    {
        $produtos['produtos'] = $this->produtos();
        return view('layouts/listadeprodutos',$produtos);

    }

//=====================CONFIRMAR EXCLUSÃO DE PRODUTO===================================

public function confirm($idproduto)
{
    $params=[
        'idproduto' => $idproduto
    ];

    $db = db_connect();
    $dados = $db->query("
        SELECT * FROM produtos 
        WHERE idproduto = :idproduto:
    ",$params)->getResultObject();
    $db->close();

    $data['produto'] = $dados[0];

    echo view('templates/top');
    echo view('excluirprodutosconfirm',$data);
    echo view('templates/foot');

}
//=====================EXCLUIR TODOS OS PRODUTOS=======================================
    public function excluirproduto($idproduto)
    {
        $params =[
            'idproduto' => $idproduto
        ];
        $db = db_connect();
        $db->query("DELETE FROM produtos WHERE idproduto = :idproduto:", $params);
        $db->close();

        return redirect()->to(site_url('Produtos/todososprodutos'));

    }

    public function editarproduto($idproduto)
    {
        $params = [
            'idproduto' => $idproduto
        ];

        $db=db_connect();
        $dados = $db->query(
            "SELECT * FROM produtos WHERE idproduto = :idproduto:"
            ,$params)->getResultObject();
        $db->close();

            $data['produto'] = $dados[0];
            
        echo view('templates/top');
        echo view('editarproduto',$data);
    }

    public function editarprodutossubmit()
    {
        $idproduto = $this->request->getPost('idproduto');
        $nome = $this->request->getPost('nome');
        $descricao = $this->request->getPost('descricao');
        $precodevenda = $this->request->getPost('preco');
        $status = $this->request->getPost('status');

        $params = [
            'idproduto' => $idproduto,
            'nome' => $nome,
            'descricao' => $descricao,  
            'preco' => $precodevenda,
            'status' => $status
        ];

        $db = db_connect();
        $db->query("
        UPDATE produtos
        SET 
        nome = :nome:,
        descricao = :descricao:,
        precovenda = :preco:,
        status = :status:  
        WHERE idproduto = :idproduto:
        ", $params);
        $db->close();

        return redirect()->to(site_url('Produtos/todososprodutos'));
    }

}
?>