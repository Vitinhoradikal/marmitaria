<?php
namespace Produtos;

    class Cadastro{
        public $nome;
        public $descricao;
        public $preco;

        public function __construct($nome, $descricao, $preco)
        {
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->preco = $preco;
        }
        public function conexao()
        {
            $hostname = 'localhost';
            $bd = 'marmitaria';
            $user = 'root';
            $password = '';
            $dbconect = mysqli_connect($hostname,$user,$password) or die ("Erro ao conectar: " . mysqli_connect_error());
            mysqli_select_db($dbconect,$bd);
            return $dbconect;
        }

        public function cadastrar(){
           $dbconect=$this->conexao();
           $query = "INSERT INTO produtos (nome, descricao, precovenda) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($dbconect, $query);

        mysqli_stmt_bind_param($stmt, "sss", $this->nome, $this->descricao, $this->preco);

        if (mysqli_stmt_execute($stmt))
           {
            echo"Cadastrado com sucesso";
           }else{
             echo"Falha ao cadastrar" . mysqli_error($dbconect);
           }

         }
    }

    $nome =         $_GET['nome'];
    $descricao =    $_GET['descricao'];
    $preco =        $_GET['preco'];

    $produto = new Cadastro($nome, $descricao, $preco);
    $produto->cadastrar();
?>

