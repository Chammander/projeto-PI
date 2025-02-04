<?php

$dbHost = 'jdbc:mysql://localhost:3306/beybyhair-html';
$dbUser = 'root';
$dbPassword = '';

$conexao = new mysqli($dbHost, $dbUser, $dbPassword);
if ($conexao->connect_error) {
    echo "ERRO";
}else{
    echo "Conexao feita";
}



?>