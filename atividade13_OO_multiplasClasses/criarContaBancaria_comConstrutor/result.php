<?php

    //referenciando outras classes
    include "Pessoa.class.php";
    include "ContaBancaria.class.php";

    //preenche os valores dos atributos do objeto Pessoa
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    $telefoneCelular = $_POST["telefoneCelular"];
    $telefoneFixo = $_POST["telefoneFixo"];
    $cpf = $_POST["cpf"];
    $profissao = $_POST["profissao"];
    $rendaMensal = $_POST["rendaMensal"];
    $cep = $_POST["cep"];
    $uf = $_POST["uf"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $logradouro = $_POST["logradouro"];
    $complemento = $_POST["complemento"];
    $numero = $_POST["numero"];

    $pessoa = new Pessoa($nome, $idade, $email, $telefoneCelular, $telefoneFixo, $cpf, $profissao, 
                         $rendaMensal, $cep, $uf, $cidade, $bairro, $logradouro, $complemento, $numero);


    //preenche os valores dos atributos do objeto ContaBancaria
    $banco = $_POST["banco"];
    $agencia = $_POST["agencia"];
    $tipoConta = $_POST["tipoConta"];
    $rensaMensalTitular = $pessoa->getRendaMensal();

    $contaBancaria = new ContaBancaria($tipoConta, $banco, $agencia, $rensaMensalTitular);

    //exibe os dados da pessoa
    echo "<h2>DADOS PESSOAIS</h2>";
    $pessoa->exibirDados();
    echo "<hr><br>";

    //exibe os dados da conta bancaria
    echo "<h2>DADOS DA CONTA BANCÁRIA</h2>";
    echo "<h3>Sua conta foi criada com sucesso!</h3>";
    $contaBancaria->exibirDados();
    echo "<hr><br>";

    //botao para voltar...
    echo '<br><a href="index.html">Voltar</a>';
?>