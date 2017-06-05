<?php
    require_once 'conexao_db.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<form id="Tarefa" action="in_atividade.php" method="POST">
    <label>
        Relatorio de Tarefa :<br>
        <textarea name="tarefa" rows="5" cols="50" placeholder="Ex: Relatorio da atividade do Dia" ></textarea>
    </label>
    <label>
        <br>Data de Entrega:
        <input type="date" name="data" required="">
    </label>
    <input type="submit" name="enviar">
</form>
</body>
</html>