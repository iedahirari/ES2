<?php

require_once('dbcannect.php'); //cAnnect AMIGA

$json_file = file_get_contents('servidores.json');   
$json_str = json_decode($json_file);
$itens = $json_str['nodes'];

// processing the array of objects
foreach ($itens as $dados) {
    $nome = $dados['nome'];
    $cargo = $dados['cargo'];
    $rendimento = $dados['rendimento'];


    // preparing statement for insert query
    $st = mysqli_prepare($connection, 'INSERT INTO dados(nome, cargo, rendimento) VALUES (?, ?, ?)');

    // bind variables to insert query params
    mysqli_stmt_bind_param($st, 'ssss', $nome, $cargo, $rendimento);

    // executing insert query
    mysqli_stmt_execute($st);
}