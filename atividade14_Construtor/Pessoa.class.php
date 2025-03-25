<?php
    class Pessoa {
        public $nome;
        public $idade;
        public $email;
        public $cargo;

        //metodo construtor
        public function __construct($nome, $idade, $email, $cargo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->email = $email;
            $this->cargo = $cargo;
        }

        //demais metodos...
        public function exibirDados() {
            echo "<h2>Dados do usuario</h2>";
            echo "<b>Nome: </b>" . $this->nome . "</br>";
            echo "<b>Idade: </b>" . $this->idade . "</br>";
            echo "<b>Email: </b>" . $this->email . "</br>";
            echo "<b>Cargo: </b>" . $this->cargo . "</br>";
        }
        
    }
?>