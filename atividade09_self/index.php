<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <label for="nome">Informe o seu nome: </label>
            <input type="text" name="nome">
            <br>
            <br>
            <button type="submit">ENVIAR</button>
        </form>
        <hr>
        <h1>
            <marquee>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $nome = $_POST['nome'];
                        echo $nome;
                    }
                ?>
            </marquee>
        </h1>
        <hr>
        <br>
        <a href="index.php">LIMPAR</a>
    </body>
</html>

