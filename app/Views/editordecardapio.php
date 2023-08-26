<?php
    namespace Cardapio;



    class Cardapio{
        public $idproduto;
        public $nome;
        public $precovenda;

        public function __construct($idproduto, $nome, $precovenda)
        {
            $this->nome = $nome;
            $this->idproduto = $idproduto;
            $this->precovenda = $precovenda;
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

        public function selecionar()
        {
            $dbconect=$this->conexao();
            $query = "SELECT `idproduto`, `nome`, `precovenda` FROM `produtos`";
            $stmt = mysqli_prepare($dbconect, $query);
           mysqli_stmt_execute($stmt);

           $result = mysqli_stmt_get_result($stmt);
           $rows = array();
           while($row=mysqli_fetch_assoc($result))
           {
           $rows[] = $row;
           }
           //$a=count($rows);
            for($i=0;$i<count($rows);$i++)
            {
                echo "idproduto: ".$rows[$i]['idproduto']."<br>";
                echo "nome: ".$rows[$i]['nome']."<br>";
                echo "preco: ".$rows[$i]['precovenda']."<br>";
            };
        }

};

$idproduto = "";
$nome = "";
$precovenda = "";

$cardapio = new Cardapio($idproduto, $nome, $precovenda);
$cardapio->selecionar();

?>

<html>
    <title>Editar Cardápio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <head></head>
    <body>
        <div class="row">
            <div class="col-3"></div>
                <div class="col-6">
                    <h3>Escolher Cardápio</h3>
                    <?php ?>
                    <form class="p-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Arroz" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Arroz
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Gravar</button>
                        <button type="reset" class="btn btn-primary">Limpar</button>
                    </form>
                </div>
            <div class="col-3"></div>
        </div>
    </body>
</html>