<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $contact = $_POST['contact'];
    $date = date('Ymd');

    $dbHost = 'sql212.infinityfree.com';
    $dbUsername = 'if0_36341304';
    $dbPassword = 'cfc361617';
    $dbName = 'if0_36341304_cadastros';

    $conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    // echo "Erro";
    // }
    // else
    // {
    // echo "Conectado com sucesso"
    // }

$smtp = $conn->prepare(
    "INSERT INTO cadastros (name, email, phone, contact, date)
    VALUES (?,?,?,?,?)");

$smtp->bind_param("sssss", $name, $email, $phone, $contact, $date);

if($smtp->execute()) {
    echo "Mensagem enviada com sucesso";
}
else {
    echo "Erro no envio da mensagem: " .$smtp->error;
}

$smtp->close();
$conn->close();

?>