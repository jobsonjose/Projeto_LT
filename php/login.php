<?php

require 'conexao.php';

if (is_logged()) {
    header("location: home.php");
    exit();
}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <script src="../js/jquery-3.2.1.js"></script>
</head>
<body class="bg-faded">
<div class="py-5 h-100 w-100">
    <div class="container">
        <div class="row py-5 mx-auto">
            <div class="col-md-8 mx-auto py-5">
                <h1 class="text-center py-4">Conecte-se Usuário</h1>
                <form class="text-center text-uppercase" method="post" action="verificacao.php">
                    <div class="form-group"><label class="">Email</label>
                        <input type="email" class="form-control" placeholder="Entre com seu email" name="email"></div>
                    <div class="form-group"><label>Senha</label>
                        <input type="password" class="form-control" placeholder="Entre com sua senha" name="senha">
                    </div>
                    <input type="radio" name="funcao" value="usuario"><label>Usuário</label>
                    <input type="radio" name="funcao" value="supervisor"><label>Supervisor</label>
                    <button type="submit" name="login" class="btn btn-primary btn-block text-uppercase my-4">Entrar
                    </button>
                    <a href="cadastro.php">Cadastrar Usuário</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>