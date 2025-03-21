<?php
    // função
    function imprimirMensagemBoasVindas($nome) {
        //elaborando o retorno da funcao
        return "Seja bem vindo, " . $nome . "!";
    }

    // execução da função
    echo imprimirMensagemBoasVindas($_POST["nome"]);

    //adiciona botao voltar
    echo ('<br><a href="index.html">VOLTAR</a>');
?>