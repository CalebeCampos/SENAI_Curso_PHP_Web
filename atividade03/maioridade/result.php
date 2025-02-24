<?php

    //declaracao de variaveis
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $idade = $_POST["idade"];

    //estrutura de decisao...

    //maneira mais comum
/*
    if ($idade >= 18) {
        echo ($nome . "voce é maior de idade.");
    }
    else {
        echo ($nome . "voce é menor de idade.");
    }
*/
    //segunda maneira
/*
    if ($idade >= 18) echo ($nome . "voce é maior de idade.");
    else echo ($nome . "voce é menor de idade.");
*/
    //terceira maneira: operador ternario
    $resul = ($idade >= 18) ? " voce é MAIOR de idade." : " voce é MENOR de idade.";

    //saida
    echo $nome . " " . $sobrenome . $resul;
    echo ('<br><a href="index.html">Voltar</a>');
?>