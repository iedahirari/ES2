<?php

    function getConnection(){
        $dsn = 'mysql:host=localhost;dbname=projeto_login;charset=utf8';
        $user = 'root';
        $pass = '';
    
        try {
            $pdo = new PDO($dsn, $user, $pass);
            return $pdo;
        } catch (PDOException $ex) {
            echo 'Erro: '.$ex->getMessage();
        }
    }