<?php

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $altura = str_replace(",",".",$_POST["altura"]);


    //validando a altura e idade....


    //IF e ELSE maneira comum
 /*   
    if ($idade >= 12 && $altura >= 1.2) {
        $mensagemValidacaoIdadeAltura = ("você ESTÁ autorizado a entrar!");
    }
    else {
        $mensagemValidacaoIdadeAltura = ("você NÃO ESTÁ autorizado a entrar!");
    }
*/

    //IF e ELSE de forma ternaria
    $mensagemValidacaoIdadeAltura = ($idade >= 12 && $altura >= 1.2) ? "você ESTÁ autorizado a entrar!" : "você NÃO ESTÁ autorizado a entrar!";

    //imprimindo o resultado....
    echo ("<h1>" . $nome . ", " . $mensagemValidacaoIdadeAltura . "</h1><br>");
    echo ('<a href="index.html">VOLTAR</a>');

?>