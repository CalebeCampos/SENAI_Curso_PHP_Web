<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Calculo do fatorial de um numero inteiro</h1>
    <hr>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="numero">Numero: </label>
        <input type="number" name="numero">
        <br>
        <br>
        <button type="submit">CALCULAR</button>
    </form>

    <?php

        //FUNCAO RECURSIVA
        //funcao de exemplo que vai calcular o fatorial de um numero
        function calcularFatorial($numero) {

            //if else comum...
            /*
            if ($numero == 0) {
                return 1;
            }
            else {
                return ($numero * calcularFatorial($numero - 1));
            }            
            */
            
            //if else ternario...
            return $numero == 0 ? 1 : $numero * calcularFatorial($numero - 1);
            
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //declaracao de variaveis
            $numero = $_POST['numero'];
            
            //executando a funcao
            echo ('<h2>O fatorial de ' . $numero . '! é: ' . calcularFatorial($numero) . '</h2>');

        }
    ?>

</body>
</html>