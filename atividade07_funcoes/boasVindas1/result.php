<?php
    // função
    function imprimirMensagemBoasVindas($nome) {
        echo ("Seja bem vindo, " . $nome . "!");
    }

    // declaração de variável
    $nomePessoa = $_POST["nome"];

    // execução da função
    imprimirMensagemBoasVindas($nomePessoa);

    //adiciona botao voltar
    echo ('<br><a href="index.html">VOLTAR</a>');
?>