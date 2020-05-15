<?php

    include './conexao.php';
    $conn = getConnection();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $newresult) {
        if($newresult['email'] == $email && $newresult['senha'] == $senha){
            session_start();
            $_SESSION['id'] = $newresult['id'];
            $_SESSION['nome'] = $newresult['nome'];
            $_SESSION['email'] = $newresult['email'];
            $found = true;
        }
    }   

    if($found == true){
        Header("Location:jogodavelha.php");
    }else{
        Header("Location:login.php");
    }

    






