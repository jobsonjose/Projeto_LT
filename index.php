<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="jquery/jquery-3.2.1.js"></script>
</head>
<body>
    <form action="php/home.php" method="POST">
    <p>Sistema de Login</p>
        <label>
            E-mail :
            <input type="email" name="email.txp">
            <br>
        </label>
        <label>
            Senha :
            <input type="password" name="senha.txp">
            <br>
        </label>
        <input type="submit" name="Enviar" value="Conecte Agora">
    </form>

</body>
</html>