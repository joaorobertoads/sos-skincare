<?php 

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = ';'
    $dbName = 'skincare'

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->conect_errno)
    {
        echo "Erro ao efetuar a conexão";
    } else {
        echo "Conexão efetuada com sucesso"
    }

?>