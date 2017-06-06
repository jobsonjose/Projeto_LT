<?php

include 'conexao_db.php';

$email = $_POST['email'];
$senha = sha1($_POST['senha']);

if (isset($_POST['funcao']) == '') {
    echo "Erro, marque a caixa de opções";

} else {
    $usuario = $_POST['funcao'];
    switch ($usuario) {
        case "usuario":
            $result = $pdo->query("SELECT * FROM USUARIO WHERE USER_EMAIL = '$email' AND USER_SENHA = '$senha'");
            if (sizeof($result) > 0) {
                $_SESSION['usuario'] = $email;
                header("location: home.php");

            }
            break;
        case "supervisor":
            $result = $pdo->query("SELECT * FROM  SUPERVISOR WHERE SUPER_EMAIL = '$email' AND SUPER_SENHA = '$senha'");
            if (sizeof($result) > 0) {
                $_SESSION['usuario'] = $email;
                header("location: home.php");
            }
            break;
    }
}

?>