<?php

$dbHost = "localhost:3305";
$dbUsername = "root";
$dbPassword = "";
$dbName = "formulario-abner";

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno)
{
    echo "Erro";
} 
else
{
    echo "Conexão efetuada com sucesso";
}

?>