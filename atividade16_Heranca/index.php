<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Escolha uma opção</h1>
    <hr>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <select name="tipoPessoa">
            <option value="fisica">Pessoa Fisica</option>
            <option value="juridica">Pessoa Juridica</option>
        </select>
        <br>
        <br>
        <button type="submit">Selecionar</button>
    </form>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
            if ($_POST["tipoPessoa"] == "fisica")
                header("Location: pessoaFisicaForm.php");
            else 
                header("Location: pessoaJuridicaForm.php");

        }

    ?>
</body>
</html>