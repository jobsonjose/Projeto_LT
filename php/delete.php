<?php

include 'conexao_db.php';

$id = $_GET['id'];
function delete($pdo, $id)
{
    $pdo->query("DELETE FROM ATIVIDADE WHERE ATV_ID = '$id'");
}

delete($pdo, $id);
header("Location: home.php");


?>