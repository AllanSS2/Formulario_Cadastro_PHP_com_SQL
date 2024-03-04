<?php

$dbhost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'siteClientes';

$conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);


// Testando se a conexão funcionava
/*
if($conexao -> connect_errno){
    echo "Erro";
}
else{
    echo "Conexão efetuada com sucesso";
}
*/


?>