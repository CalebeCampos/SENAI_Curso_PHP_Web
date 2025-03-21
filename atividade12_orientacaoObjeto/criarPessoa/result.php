<?php

    //referenciando a classe Pessoa
    include "Pessoa.class.php";

    //instanciando a classe Pessoa (cria objeto do tipo Pessoa)
    $usuario = new Pessoa();

    //preenche os valores dos atributos do objeto do tipo Pessoa
    $usuario->nome = $_POST["nome"];
    $usuario->idade = $_POST["idade"];
    $usuario->email = $_POST["email"];
    $usuario->cpf = $_POST["cpf"];

    //exibindo os valores dos atributos do objeto
    echo '<b>Nome: </b>' . $usuario->nome . '</br>';
    echo '<b>Idade: </b>' . $usuario->idade . '</br>';
    echo '<b>Email: </b>' . $usuario->email . '</br>';
    echo '<b>CPF: </b>' . $usuario->cpf . '</br>';

    //executando o metodo saudar da classe Pessoa
    //o metodo saudar retorna uma frase por isso o uso do echo para imprimir na tela
    echo "<h3>" . $usuario->saudar() . "</h3>";

    //executando o metodo exibirCartaoVisitas da classe Pessoa
    //o metodo exibirCartaoVisitas ja executa e usa o echo, ou seja, a saida ja é a impressao na tela
    $usuario->exibirCartaoVisitas();

    //botao para voltar...
    echo '<br><a href="index.html">Voltar</a>';
?>