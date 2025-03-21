<?php

    //importando as funcoes de outro arquivo
    include "funcoes.php";

    //variaveis...
    $valor1 = str_replace(",",".",$_POST['valor1']);
    $valor2 = str_replace(",",".",$_POST['valor2']);
    $operador = $_POST['operador'];

    //execucao do programa...
    switch ($operador) {

        case "areaQuadrilatero": 
            echo 
            "A área do quadrilatero, de numeros " 
            . $valor1 
            . " e " 
            . $valor2 
            . " é: " 
            . calcularAreaQuadrilatero($valor1, $valor2);
        break;

        case "areaTriangulo": 
            echo 
            "A área do triangulo, de numeros " 
            . $valor1 
            . " e " 
            . $valor2 
            . " é: " 
            . calcularAreaTriangulo($valor1, $valor2);
        break;

        case "equacaoPrimeiroGrau": 
            echo 
            "O valor de X na equação do 1º grau, de numeros " 
            . $valor1 
            . " e " 
            . $valor2 
            . " é: " 
            . calcularEquacaoPrimeiroGrau($valor1, $valor2);
        break;

    }

    //botao para voltar...
    echo '<br><a href="index.html">Voltar</a>';
?>