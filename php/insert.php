<?php
        $dbname ='PROJETO_LT';
    $host = 'localhost';
    $user = 'root';
    $pass = '123456';

    $dsn = "mysql:dbname=$dbname;host=$host";

    $pdo = new PDO($dsn,$user,$pass);
    $nome = $_POST['nome_txp'];
    $email = $_POST['email_txp'];
    $senha = $_POST['senha_txp'];
    $telefone = $_POST['telefone_txp'];
    $usuario = $_POST['funcao_txp'];
    var_dump($usuario);
    if($usuario == usuario){
        $ret = $pdo->exec("INSERT INTO USUARIO (USER_NOME, USER_EMAIL, USER_SENHA, USER_NUM_CELULAR) values ('$nome', '$email', '$senha', '$telefone') ");
        var_dump($ret);
    }
    if($usuario == supervisor) {
        $rot = $pdo->exec("INSERT INTO SUPERVISOR (SUPER_NOME, SUPER_EMAIL, SUPER_SENHA, SUPER_TELE) values('$nome', '$email', '$senha', '$telefone')");
        var_dump($rot);
   }




?>