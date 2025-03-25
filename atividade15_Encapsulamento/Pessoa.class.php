<?php
    class Pessoa {
        public $nome;
        private $idade;
        private $email;

        //metodo construtor
        public function __construct($nome, $idade, $email){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->email = $email;
        }

        //metodos de acesso aos atributos privados

        public function setIdade($valor){
            $this->idade = $valor;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setEmail($valor){
            $this->email = $valor;
        }

        public function getEmail(){
            return $this->email;
        }
/*
        //demais metodos...
        public function exibirDados() {
            echo "<h2>Dados do usuario</h2>";
            echo "<b>Nome: </b>" . $this->nome . "</br>";
            echo "<b>Idade: </b>" . $this->idade . "</br>";
            echo "<b>Email: </b>" . $this->email . "</br>";
        }
*/       
    }
?>