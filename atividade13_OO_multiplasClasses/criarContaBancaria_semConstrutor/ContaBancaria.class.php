<?php

    class ContaBancaria {

        //definicao dos atributos
        public $tipoConta;
        public $banco;
        public $agencia;
        public $numeroConta;
        public $rendaMensalTitular;
        public $saldo;
        public $chequeEspecial;

        //criando os metodos da classe

        public function gerarNumeroConta() {
            return str_pad(rand(1, 9999), 8, "0", STR_PAD_LEFT) . "-" . rand(1, 9);
        }

        public function gerarSaldoInicial() {
            return 0.00;
        }

        public function gerarChequeEspecialInicial() {
            return $this->rendaMensalTitular * 0.1;
        }

        public function exibirDados() {
            echo "<b>Tipo: </b>" . $this->tipoConta . "</br>";
            echo "<b>Banco: </b>" . $this->banco . "</br>";
            echo "<b>Agencia: </b>" . $this->agencia . "</br>";
            echo "<b>Conta: </b>" . $this->numeroConta . "</br>";
            echo "<b>Saldo: </b>" . number_format($this->saldo, 2, ',', '.'). "</br>";
            echo "<b>Cheque especial: </b>" . number_format($this->chequeEspecial, 2, ',', '.') . "</br></br>";
        }

    }

?>