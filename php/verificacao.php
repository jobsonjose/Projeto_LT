<?php

require 'conexao.php';

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);

    if (isset($_POST['funcao']) == '') {
        echo "Erro, marque a caixa de opções";

    } else {
        $usuario = $_POST['funcao'];
        switch ($usuario) {
            case "usuario":
                $stmt = $pdo->prepare("SELECT * FROM USUARIO WHERE USER_EMAIL = ? AND USER_SENHA = ?");
                $stmt->execute(array($email, $senha));
                $result = $stmt->fetchAll();

                if (sizeof($result) > 0) {
                    $_SESSION['user'] = $result[0]['USER_NOME'];
                    header("location: home.php");

                } else {
                    echo "erro!";
                }
                break;
            case "supervisor":
                $stmt = $pdo->prepare("SELECT * FROM  SUPERVISOR WHERE SUPER_EMAIL = ? AND SUPER_SENHA = ?");
                $stmt->execute(array($email, $senha));
                $result = $stmt->fetchAll();

                if (sizeof($result) > 0) {
                    $_SESSION['user'] = $result[0]['SUPER_NOME'];;
                    header("location: home.php");
                } else {
                    echo "erro!";
                }
                break;
        }
    }

}

?>