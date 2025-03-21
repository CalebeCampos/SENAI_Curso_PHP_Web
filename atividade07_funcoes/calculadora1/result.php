<?php

    //funcoes...

    function somar($x, $y) {
        return $x + $y;
    }

    function subtrair($x, $y) {
        return $x - $y;
    }

    function multiplicar($x, $y) {
        return $x * $y;
    }

    function dividir($x, $y) {
        return $x / $y;
    }

    function obterRestoDaDivisao($x, $y) {
        return $x % $y;
    }

    //variaveis...
    $valor1 = str_replace(",",".",$_POST['x']);
    $valor2 = str_replace(",",".",$_POST['y']);
    $operador = $_POST['operador'];

    //execucao do programa...
    switch ($operador) {

        case "subtracao": echo subtrair($valor1, $valor2);
        break;

        case "soma": echo somar($valor1, $valor2);
        break;

        case "multiplicacao": echo multiplicar($valor1, $valor2);
        break;

        case "divisao": echo dividir($valor1, $valor2);
        break;

        case "resto": echo obterRestoDaDivisao($valor1, $valor2);
        break;

        case "potencia": echo pow($valor1, $valor2);
        break;
    }

    //botao para voltar...
    echo '<br><a href="index.html">Voltar</a>';
?>