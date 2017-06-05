<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<form>
		<input type="button" name="logout" value="Sair">
	</form>



	<?php $result = $pdo->query("SELECT * FROM USUARIO WHERE USER_EMAIL = '$email'"); 
			$usuarios = $result->fetchAll();
	?>
	<table>
	<?php foreach($usuarios as $values):?>
		<tr>
		<td><?= $values['USER_NOME'] ?></td>
		<td><?= $values['USER_EMAIL'] ?></td>
		</tr>
	<?php endforeach;?>
	</table>

</body>
</html>