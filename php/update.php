<?php

include_once 'conexao_db.php';
if (isset($_SESSION['usuario'])) {
    $id = $_GET['id'];
    $texto = $_GET['texto'];
    $data = $_GET['data'];
    // echo $id;
    // echo $texto;
    // echo $data;
    $_SESSION['id'] = $id;


    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
    <h2>Editando Tarefa .....</h2>
    <form id="Tarefa" action="update2.php" method="POST">
        <label>
            Relatorio de Tarefa :<br>
            <textarea name="tarefa" rows="5" cols="50"><?php echo $texto; ?></textarea>
        </label>
        <label>
            <br>Data de Entrega:
            <input type="date" name="data" value="<?php echo $data; ?>"" required="">
        </label>
        <input type="submit" name="enviar" value="Editar">
    </form>

    </body>
    </html>
    <?php
} else {
    echo "usuario não logado!";
}
?>

