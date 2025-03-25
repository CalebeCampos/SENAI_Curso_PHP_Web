<?php
    // importando a classe Pessoa
    include "Pessoa.class.php";
    
    //instanciando a classe Pessoa
    //passando valores genericos para os parametros do metodo construtor da classe Pessoa
    $usuario = new Pessoa("",0,"","");
    
    //passando para os atributos do objeto Pessoa os respectivos valores
    $usuario->nome = $_POST["nome"];
    $usuario->idade = $_POST["idade"];
    $usuario->email = $_POST["email"];
    $usuario->cargo = $_POST["cargo"];

    $usuario->exibirDados();

    //botao para voltar...
    echo '<br><a href="index.html">Voltar</a>';
?>