<?php

include 'conexao_db.php';

$ema = $_POST['email'];
$paz = sha1($_POST['senha']);
$usuario = $_POST['funcao'];

if ($usuario === "usuario") {
    $ret = $pdo->query("SELECT * FROM USUARIO where USER_EMAIL = '$ema' and USER_SENHA = '$paz'");
    var_dump($ret);
    // header("location: home.php");

} if ($usuario === "supervisor") {
    $rot = $pdo->query("SELECT * FROM  SUPERVISOR where SUPER_EMAIL = '$ema' or SUPER_SENHA = '$paz'");
    var_dump($rot);
} else {
    echo "ERRO";
}


?>