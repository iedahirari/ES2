<?php
    //conectar com o bd
    include './conexao.php';
    //abir uma conecao
    $conn = getConnection();

    //setar os valores em variaveis para cadastrar no bd
    //post envia as informacoes 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //inserir dados do cadastro no bd
    $sql = "INSERT INTO usuarios (nome,email,senha) VALUES (?,?,?)";
   //PDO serve para preparar a variavel para receber um comando sql e assim substituir o valor dela
    $stmt = $conn->prepare($sql);
    //bondparam vincula uma variável a uma instrução SQL que foi usada no prepare (STMT)
    $stmt->bindParam(1,$nome);
    $stmt->bindParam(2,$email);
    $stmt->bindParam(3,$senha);
    // execute avaliada o bondparam (so quando ele for chamado)
    if($stmt->execute()){
        //se cadastrar certinhuum volta para o login
        Header("Location:login.php");
    }else{
        //senao da f5 na pagina pra tentar de novo
        Header("Location:cadastrar.php");
    }
    