<?php

if (isset($_SESSION['usuario'])) {

    ?>

    <form action="" method="POST">
        <?= "<span class='boas_vindas'>Bem vindo(a), <b>" . $_SESSION['usuario'] . "</b>!! </span>" ?><input
                type="submit"
                name="logout"
                value="Logout">
    </form>

    <?php
}
if (isset($_POST['logout'])) {
    unset($_SESSION['usuario']);
    header("location: cadastro.php");
}

?>