<?php
      $dbname ='PROJETO_LT';
    $host = 'localhost';
    $user = 'root';
    $pass = '123456';

    $dsn = "mysql:dbname=$dbname;host=$host";

    $ema = $_POST['email_txp'];
    $paz = $_POST['senha_txp'];
    $usuario = $_POST['funcao_txp'];

    if($usuario == usuario){
        $ret = $pdo->query("SELECT * FROM USUARIO where USER_EMAIL = '$ema' and USER_SENHA = '$paz'");
        var_dump($ret);
        // header("location: home.php");

    }
    if($usuario == supervisor) {
        $rot = $pdo->query("SELECT * FROM  SUPERVISOR where SUPER_EMAIL = '$ema' or SUPER_SENHA = '$paz'");
        var_dump($rot);
   }else{
    echo "ERRO";
  }


 ?>