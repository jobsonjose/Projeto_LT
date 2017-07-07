<?php

require 'conexao.php';

if(isset($_POST['cadastrar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);
    $telefone = $_POST['telefone'];

    if (isset($_POST['funcao']) == '') {
        echo "Erro, marque a caixa de opções";

    } else {
        $usuario = $_POST['funcao'];
        switch ($usuario) {
            case "usuario":
                $ret = $pdo->prepare("INSERT INTO USUARIO (USER_NOME, USER_EMAIL, USER_TELE, USER_SENHA) VALUES (?, ?, ?, ?) ");
                $ret->execute(array($nome, $email, $telefone, $senha));
                $result = $ret->fetchAll();

                $_SESSION['user'] = $result[0]['USER_NOME'];
                header("location: home.php");
                break;
            case "supervisor":
                $ret = $pdo->prepare("INSERT INTO SUPERVISOR (SUPER_NOME, SUPER_EMAIL, SUPER_TELE, SUPER_SENHA) VALUES (?, ?, ?, ?)");
                $ret->execute(array($nome, $email, $telefone, $senha));
                $_SESSION['user'] = $result[0]['SUPER_NOME'];
                header("location: home.php");
                break;
        }
    }

}

?>
