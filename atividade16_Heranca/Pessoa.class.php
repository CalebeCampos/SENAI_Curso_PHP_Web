<?php

    abstract class Pessoa {
        /*
        public $nome;
        public $idade;
        */
        private $telefone;
        private $endereco;
        private $email;

        //metodos de acesso...

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function getEndereco() {
            return $this->endereco;
        }

        public function getEmail() {
            return $this->email;
        }



    }

?>