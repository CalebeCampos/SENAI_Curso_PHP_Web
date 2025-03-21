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
        
        //criando os metodos da classe

        public function getRendaMensal() {
            return $this->rendaMensal;
        }

        public function exibirDados() {
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