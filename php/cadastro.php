<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
</head>
<body>

<div id="direita">
    <button id="Conecte">Conecte Já</button>
    <button id="Regis">Registre-se</button>
</div>

<div id="formularios"></div>
<script>

    $("#Regis").click(function () {
        $(".remove").remove();

    
        $("#formularios").append("<form class='remove' id='insert' action='insert.php' method='POST'></form>");
        $("#insert").append("<h3>Registrando Usuario....</h3><br>");
        $("#insert").append("Nome :");
        $("#insert").append("<input type='text' name='nome' placeholder='Digite seu Nome'><br>");

        $("#insert").append("E-mail :");
        $("#insert").append("<input type='email' name='email' placeholder='ex : ifpe.igarassu@gmail.com'><br>");

        $("#insert").append("Senha :");
        $("#insert").append("<input type='password' name='senha' placeholder='Digite mais de 8 caracteres'><br>");

        $("#insert").append("Telefone :");
        $("#insert").append("<input type='text' name='telefone' placeholder='ex :(81) 99999-9999'><br>");

        $("#insert").append("<input type='radio' name='funcao' value='usuario'>Usuario");
        $("#insert").append("<input type='radio' name='funcao' value='supervisor'>Supervisor<br>");

        $("#insert").append("<input type='submit' name='Enviar' value='Registre-se'><br>");

        


    });
    $("#Conecte").click(function () {
        $(".remove").remove();
        $("#formularios").append("<form class='remove' id='select' action='select.php' method='POST'></form>");
        $("#select").append("<h3> Conecte-se Usuario</h3>");
        $("#select").append("E-mail :");
        $("#select").append("<input type='email' name='email' placeholder='ex : ifpe.igarassu@gmail.com'><br>");
        $("#select").append("Senha :");
        $("#select").append("<input type='password' name='senha' placeholder='Digite sua Senha'><br>");
        $("#select").append("<input type='radio' name='funcao' value='usuario'>Usuario");
        $("#select").append("<input type='radio' name='funcao' value='supervisor'>Supervisor<br>");
        $("#select").append("<input type='submit' name='Enviar' value='Conecte-se'>");

    });
    $("body").append("<h2 class='remove'> Projeto_LT<h2>");
    $("body").append("<h3 class='remove'>Participantes :<h3>");
    $("body").append("<h5 class='remove'>José Gabriel</h5>");
    $("body").append("<h5 class='remove'>Jobson José</h5><br>");


</script>
</body>
</html>
