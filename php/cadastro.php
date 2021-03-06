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
        <div class="row mx-auto">
            <div class="col-md-8 mx-auto">
                <h1 class="text-center py-4">Registrando um Novo Usuário</h1>
                <form class="text-center text-uppercase" method="post" action="add_usuario.php">
                    <div class="form-group"><label class="">Nome</label>
                        <input type="text" class="form-control" placeholder="Informe seu nome" name="nome"></div>
                    <div class="form-group"><label class="">Email</label>
                        <input type="email" class="form-control" placeholder="Informe seu email" name="email"></div>
                    <div class="form-group"><label>Senha</label>
                        <input type="password" class="form-control" placeholder="Entre com sua senha" name="senha">
                    </div>
                    <div class="form-group"><label class="">Telefone</label>
                        <input type="text" class="form-control" placeholder="Informe seu telefone ex: (81) 99999-9999"
                               name="telefone"></div>
                    <input type="radio" name="funcao" value="usuario"><label>Usuário</label>
                    <input type="radio" name="funcao" value="supervisor"><label>Supervisor</label>
                    <button type="submit" name="cadastrar" class="btn btn-primary btn-block text-uppercase">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>