<?php

require 'conexao.php';

if (!is_logged()) {
    header("location: login.php");
}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-faded fixed-top">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_tarefa.php">Criar uma Tarefa</a>
                </li>
            </ul>
            <form class="form-inline my-lg-0 my-2" method="post" action="">
                <p class="pi-draggable px-5 m-2" draggable="true">Bem-vindo(a): <?= $_SESSION['user'] ?></p>
                <button type="submit" class="btn my-2 my-sm-0 btn-outline-primary" name="sair">Sair</button>
            </form>
        </div>
    </div>
</nav>
