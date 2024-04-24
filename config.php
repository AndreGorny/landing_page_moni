<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $contact = $_POST['contact'];

    $dbHost = 'sql212.infinityfree.com';
    $dbUsername = 'if0_36341304';
    $dbPassword = 'cfc361617';
    $dbName = 'if0_36341304_cadastros';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
    echo "Erro";
    }
    else{
    echo "Conectado com sucesso";
}

?>