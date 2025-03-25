<?php
    // importando a classe Pessoa
    include "Pessoa.class.php";
    
    //instanciando a classe Pessoa
    $usuario = new Pessoa("",0,"");
    
    //passando valores para os atributos do objeto Pessoa
    $usuario->nome = $_POST["nome"];
    $usuario->setIdade($_POST["idade"]);
    $usuario->setEmail($_POST["email"]);

    //$usuario->exibirDados();

    echo "<h2>Dados do usuario</h2>";
    echo "<b>Nome: </b>" . $usuario->nome . "</br>";
    echo "<b>Idade: </b>" . $usuario->getIdade() . "</br>";
    echo "<b>Email: </b>" . $usuario->getEmail() . "</br>";

    //botao para voltar...
    echo '<br><a href="index.html">Voltar</a>';
?>