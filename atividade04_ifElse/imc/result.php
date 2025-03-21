<?php

    $nome = $_POST["nome"];
    $peso = str_replace(",",".",$_POST["peso"]);
    $altura = str_replace(",",".",$_POST["altura"]);

    //calculando o IMC....

    //forma 1 utilizando o operado de potenciacao
    //$imc = ($peso / ($altura**2))

    //forma 2 utilizando a funcao nativa de potenciacao
    $imc = ( $peso / pow($altura,2) );

    //formatando o valor de IMC para duas casas decimais
    $imc = round($imc,2);

    //classificando o imc....
    if ($imc <= 18.5) {
        $mensagemClassificacaoIMC = ("Voce está abaixo do peso!");
    }
    else if ($imc <= 25) {
        $mensagemClassificacaoIMC = ("Voce está no peso ideal!");
    }
    else if ($imc <= 30) {
        $mensagemClassificacaoIMC = ("Voce está acima do peso!");
    }
    else if ($imc <= 35) {
        $mensagemClassificacaoIMC = ("Voce está obeso!");
    }
    else if ($imc <= 40) {
        $mensagemClassificacaoIMC = ("Voce está com obesidade de nivel II!");
    }
    else {
        $mensagemClassificacaoIMC = ("Voce está com obesidade morbida!");
    }

    //imprimindo o resultado do imc
    echo ("<h1>");
    echo ($nome . ", seu IMC é: " . $imc . " " );
    echo ("<br>");
    echo ($mensagemClassificacaoIMC);
    echo ("</h1>");
    echo ("<br>");
    echo ('<a href="index.html">VOLTAR</a>');


?>