<?php
include_once "conexao_db.php";
include 'cabecalho.php';

if (isset($_SESSION['usuario'])) {

    $texto = $_POST['tarefa'];
    $data = $_POST['data'];
    $id = $_SESSION['id'];

    $ret = $pdo->exec("UPDATE ATIVIDADE set ATV_TEXTO = '$texto',  ATV_DATA = '$data' WHERE  ATV_ID = '$id'");
    //var_dump($ret);
    //echo "<br>";
    //$result = $ret->fetchAll();
    //print_r($pdo->errorInfo());
    //var_dump($result);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Editado</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
              integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
              crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">

    </head>
    <body>
    <?php
    if ($ret > 0) {
        echo "<div  id='center' class='alert alert-success'>";
        echo "Editado com <strong>Sucesso</strong>";
        echo "</div>";
    } else {
        echo "<div  id='center' class='alert alert-danger'>";
        echo "Ocorreu Algum Erro na edição por favor<strong>Tente Novamente </strong>";
        echo "</div>";


    }

    ?>
    <a href="home.php">Voltar ao Esquema de Tarefas</a>


    </body>
    </html>

    <?php
}else{
    echo "usuario não logado!";
}
?>