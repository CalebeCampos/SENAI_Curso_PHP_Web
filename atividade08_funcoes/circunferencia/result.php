<?php

    //importando as funcoes de outro arquivo
    include "funcoes.php";

    //variaveis...
    $tamanhoRaio = str_replace(",",".",$_POST['tamanhoRaio']);

    //execucao do programa...

    echo 
    "Para o raio de tamanho " 
    . $tamanhoRaio 
    . ", temos: " 
    . "<br><br>"
    . "Area: "
    . calcularAreaCirculo($tamanhoRaio)
    . "<br>"
    . "Cincunferencia: " 
    . calcularCircunferencia($tamanhoRaio)
    . "<br><br>";


    //botao para voltar...
    echo '<br><a href="index.html">Voltar</a>';
?>