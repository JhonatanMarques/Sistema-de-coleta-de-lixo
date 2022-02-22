
<?php
// Tentativa de conexão com o banco de dados 
$hostname = "localhost";
$bancodedados = "recicla_nit";
$usuario = "root";
$senha = "";
// Conectado 


$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados );
/*if($mysqli->connect_errno){   TESTE DO BANCO DE DADOS
    echo "Status do banco de dados: Falha ao conectar (". $mysqli->connect_errno. ")" . $mysqli->connect_errno;
}
else{
    echo "Status do banco de dados: Conectado !";
} */