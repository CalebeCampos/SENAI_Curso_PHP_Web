<?php

    //o termo "final" indica que a classe nao poderá ser adicionada outra herenca, ou seja, 
    // é a classe final da arvore de herença, em outras palavras é uma classe infertil.
    final class PessoaFisica extends Pessoa {
        
        private $nome;
        private $cpf;
        private $dataNascimento;
        private $profissao;
        private $genero;

        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setCPF($cpf) {
            $this->cpf = $cpf;
        }
        public function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }
        public function setProfissao($profissao) {
            $this->profissao = $profissao;
        }
        public function setGenero($genero) {
            $this->genero = $genero;
        }

        public function getNome() {
            return $this->nome;
        }
        public function getCPF() {
            return $this->cpf;
        }
        public function getDataNascimento() {
            return $this->dataNascimento;
        }
        public function getProfissao() {
            return $this->profissao;
        }
        public function getGenero() {
            return $this->genero;
        }

    }

?>