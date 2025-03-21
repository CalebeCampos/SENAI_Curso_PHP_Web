<?php

    //referenciando outras classes
    include "Pessoa.class.php";
    include "ContaBancaria.class.php";

    //instanciando as classes
    $pessoa = new Pessoa();
    $contaBancaria = new ContaBancaria();

    //preenche os valores dos atributos do objeto Pessoa
    $pessoa->nome = $_POST["nome"];
    $pessoa->idade = $_POST["idade"];
    $pessoa->email = $_POST["email"];
    $pessoa->telefoneCelular = $_POST["telefoneCelular"];
    $pessoa->telefoneFixo = $_POST["telefoneFixo"];
    $pessoa->cpf = $_POST["cpf"];
    $pessoa->profissao = $_POST["profissao"];
    $pessoa->rendaMensal = $_POST["rendaMensal"];
    $pessoa->cep = $_POST["cep"];
    $pessoa->uf = $_POST["uf"];
    $pessoa->cidade = $_POST["cidade"];
    $pessoa->bairro = $_POST["bairro"];
    $pessoa->logradouro = $_POST["logradouro"];
    $pessoa->complemento = $_POST["complemento"];
    $pessoa->numero = $_POST["numero"];

    //preenche os valores dos atributos do objeto ContaBancaria
    $contaBancaria->banco = $_POST["banco"];
    $contaBancaria->agencia = $_POST["agencia"];
    $contaBancaria->tipoConta = $_POST["tipoConta"];
    $contaBancaria->limiteChequeEspecial = $_POST["limiteChequeEspecial"];

    //exibe os dados da pessoa
    echo "<h2>DADOS PESSOAIS</h2>";
    $pessoa->exibirDados();
    echo "<hr><br>";

    //exibe os dados da conta bancaria
    echo "<h2>DADOS DA CONTA BANCÁRIA</h2>";
    $contaBancaria->exibirDados();
    echo "<hr><br>";

    //botao para voltar...
    echo '<br><a href="index.html">Voltar</a>';
?>