<?php

    final class PessoaJuridica extends Pessoa {
        
        private $nomeFantasia;
        private $razaoSocial;
        private $cnpj;

        public function setNomeFantasia($nomeFantasia) {
            $this->nomeFantasia = $nomeFantasia;
        }
        public function setRazaoSocial($razaoSocial) {
            $this->razaoSocial = $razaoSocial;
        }
        public function setCNPJ($cnpj) {
            $this->cnpj = $cnpj;
        }

        public function getNomeFantasia() {
            return $this->nomeFantasia;
        }
        public function getRazaoSocial() {
            return $this->razaoSocial;
        }
        public function getCNPJ() {
            return $this->cnpj;
        }

    }

?>