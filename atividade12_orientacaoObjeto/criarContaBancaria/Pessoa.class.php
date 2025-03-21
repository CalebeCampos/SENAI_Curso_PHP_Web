<?php

    class Pessoa {

        //definicao dos atributos
        public $nome;
        public $idade;
        public $email;
        public $telefoneCelular;
        public $telefoneFixo;
        public $cpf;
        public $profissao;
        public $rendaMensal;
        public $cep;
        public $uf;
        public $cidade;
        public $bairro;
        public $logradouro;
        public $complemento;
        public $numero;
        
        /*
        function __construct($nome, $idade, $email, $telefoneCelular, $telefoneFixo, $cpf, $profissao, $rendaMensal, $cep, $uf, $cidade, $bairro, $logradouro, $complemento, $numero) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->email = $email;
            $this->telefoneCelular = $telefoneCelular;
            $this->telefoneFixo = $telefoneFixo;
            $this->cpf = $cpf;
            $this->profissao = $profissao;
            $this->rendaMensal = $rendaMensal;
            $this->cep = $cep;
            $this->uf = $uf;
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->logradouro = $logradouro;
            $this->complemento = $complemento;
            $this->numero = $numero;
        }
        */

        //criando os metodos da classe

        function exibirDados() {
            echo "<b>Nome: </b>" . $this->nome . "</br>";
            echo "<b>Idade: </b>" . $this->idade . "</br>";
            echo "<b>Email: </b>" . $this->email . "</br>";
            echo "<b>Telefone Celular: </b>" . $this->telefoneCelular . "</br>";
            echo "<b>Telefone Fixo: </b>" . $this->telefoneFixo . "</br>";
            echo "<b>CPF: </b>" . $this->cpf . "</br>";
            echo "<b>Profissão: </b>" . $this->profissao . "</br>";
            echo "<b>Renda Mensal: </b>" . $this->rendaMensal . "</br>";
            echo "<b>CEP: </b>" . $this->cep . "</br>";
            echo "<b>UF: </b>" . $this->uf . "</br>";
            echo "<b>Cidade: </b>" . $this->cidade . "</br>";
            echo "<b>Bairro: </b>" . $this->bairro . "</br>";
            echo "<b>Logradouro: </b>" . $this->logradouro . "</br>";
            echo "<b>Complemento: </b>" . $this->complemento . "</br>";
            echo "<b>Número: </b>" . $this->numero . "</br></br>";
        }

    }


?>