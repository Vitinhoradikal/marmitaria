<?php

namespace Conexao;

class dbconect{

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
}
?>