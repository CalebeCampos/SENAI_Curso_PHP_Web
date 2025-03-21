<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Calculo da sequencia de FIBONACCI</h1>
    <hr>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="numero"><b>Numero: </b></label>
        <input type="number" name="numero">
        <button type="submit">CALCULAR</button>
    </form>

    <hr>
    <b>Sequencia de Fibonacci: </b>

    <?php

        // FUNCAO RECURSIVA
        // F(n)=F(n−1)+F(n−2) formula matematica da sequencia de fibonacci
        function calcularFibonacci($numero) {
            if ($numero == 0) {
                return 0;
            }
            elseif ($numero == 1) {
                return 1;
            }
            else {
                return calcularFibonacci($numero - 1) + calcularFibonacci($numero - 2);
            }            
        }    

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //declaracao de variaveis
            $quantidadeAlgarismoSequencia = $_POST['numero'];
            
            //executando a funcao e imprimindo a sequencia
            for ($i = 1; $i <= $quantidadeAlgarismoSequencia; $i++) {
                echo calcularFibonacci($i) . "  ";
            }

        }
    ?>

    <hr>
    <a href="index.php">VOLTAR</a>

</body>
</html>