<?php
    require_once 'conexao_db.php';

    $data = $_POST['data'];
    $tarefa = $_POST['tarefa'];

    $ret = $pdo->exec("INSERT INTO ATIVIDADE (ATV_TEXTO, ATV_DATA) VALUES('$tarefa', '$data')");
    //var_dump($ret);
    //print_r($pdo->errorInfo())

 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
 </head>
 <body>
    <?php
        if ($ret > 0) {
            echo "<div  id='center' class='alert alert-success'>";
            echo "Tarefa Concluida com <strong>Sucesso</strong>";
            echo "</div>";
        }else{
            echo "<div  id='center' class='alert alert-danger'>";
            echo "Erro ao Enviar a Tarefa <strong>Tente Novamente </strong>";
            echo "</div>";


        }

     ?>
     <a href="home.php">Mais Tarefas</a>

 </body>
 </html>