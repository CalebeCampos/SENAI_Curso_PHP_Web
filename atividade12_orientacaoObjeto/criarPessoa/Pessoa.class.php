<?php

    //criando a classe pessoa...

    class Pessoa {

        //definicao dos atributos
        public $nome;
        public $idade;
        public $email;
        public $cpf;

        //criando os metodos da classe

        function saudar() {
            return "Olá, meu nome é " . $this->nome . ", desejo que tenham uma boa noite!";
        }

        function exibirCartaoVisitas() {
            echo "<h2>Segue o meu cartao de visitas:</h2>";
            echo "<b>Nome: </b>" . $this->nome . "</br>";
            echo "<b>Idade: </b>" . $this->idade . "</br>";
            echo "<b>Email: </b>" . $this->email . "</br>";
            echo "<b>CPF: </b>" . $this->cpf . "</br>";
        }

    }


?>