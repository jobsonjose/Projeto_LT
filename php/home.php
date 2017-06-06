<?php
include 'conexao_db.php';
$ret = $pdo->query("SELECT ATV_DATA, ATV_TEXTO, ATV_ID FROM ATIVIDADE");
$result = $ret->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h2>Fez Atividade hoje </h2>

<form id="Tarefa" action="in_atividade.php" method="POST">
    <label>
        Relatorio de Tarefa :<br>
        <textarea name="tarefa" rows="5" cols="50" placeholder="Ex: Relatorio da atividade do Dia"></textarea>
    </label>
    <label>
        <br>Data de Entrega:
        <input type="date" name="data" required="">
    </label>
    <input type="submit" name="enviar">
</form>
<table id="stif">
    <tr>
        <th>Data da Atividade</th>
        <th>Tarefa Adicionado</th>
    </tr>
    <?php
    for ($i = 0; $i < count($result); $i++) {
        echo "<tr>";
        echo "<td>" . $result[$i]['ATV_DATA'] . "</td>";
        echo "<td>" . $result[$i]['ATV_TEXTO'] . " " . "<a href='home.php'><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a>
                                                        <a href='delete.php?id={$result[$i]['ATV_ID']}'><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a>
                                                        </td>";
        echo "</tr>";
    }
    ?>


</table>

</body>
</html>