<?php
include ("../model/config.php");

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controller/insertion.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="userFile">
        <input type="submit" value="Enviar arquivo">
    </form>

    <?php
    /**
     * Exibe mensagem de sucesso de carga de dados.
     */
        if(isset($_SESSION['mensagem'])){
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
        }
    ?>

    <form action="../view/relatorio.php" method="$_REQUEST">
        <input type="submit" value="Exibir lista de Transações">
    </form>
</body>
</html>