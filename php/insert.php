<?php

include 'conexao_db.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = sha1($_POST['senha']);
$telefone = $_POST['telefone'];
$usuario = $_POST['funcao'];
var_dump($usuario);

switch ($usuario) {
    case "usuario":
        $pdo->exec("INSERT INTO USUARIO (USER_NOME, USER_EMAIL, USER_TELE, USER_SENHA) VALUES ('$nome', '$email', '$telefone', '$senha') ");
        break;
    case "supervisor":
        $pdo->exec("INSERT INTO SUPERVISOR (SUPER_NOME, SUPER_EMAIL, SUPER_TELE, SUPER_SENHA) VALUES ('$nome', '$email', '$telefone', '$senha')");
        break;
    default:
        echo "Erro, marque a caixa de opções";
        break;
}


?>