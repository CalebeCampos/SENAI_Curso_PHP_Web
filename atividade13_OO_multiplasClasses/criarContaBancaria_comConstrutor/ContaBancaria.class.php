<?php

    class ContaBancaria {

        //definicao dos atributos
        public $tipoConta;
        public $banco;
        public $agencia;
        public $numeroConta;
        public $rendaMensalTitular;
        private $saldo;
        private $chequeEspecial;

        public function __construct($tipoConta, $banco, $agencia, $rendaMensalTitular) {
            $this->tipoConta = $tipoConta;
            $this->banco = $banco;
            $this->agencia = $agencia;
            $this->rendaMensalTitular = $rendaMensalTitular;
            $this->numeroConta = $this->gerarNumeroConta();
            $this->saldo = $this->gerarSaldoInicial();
            $this->chequeEspecial = $this->gerarChequeEspecialInicial();
        }

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
            echo "<b>Saldo: </b>" . number_format($this->saldo, 2, ',', '.') . "</br>";
            echo "<b>Cheque especial: </b>" . number_format($this->chequeEspecial, 2, ',', '.') . "</br></br>";
        }

        public function consultarSaldo() {
            return $this->saldo;
        }

        public function consultarChequeEspecial() {
            return $this->chequeEspecial;
        }

        public function depositar($valor) {
            $this->saldo += $valor;
        }

        public function sacar($valor) {
            if ($valor <= $this->saldo) {
                $this->saldo -= $valor;
            } else {
                $this->saldo -= $valor;
                $this->saldo += $this->chequeEspecial;
            }
        }

        public function transferir($valor, $contaDestino) {
            if ($valor <= $this->saldo) {
                $this->saldo -= $valor;
                $contaDestino->saldo += $valor;
            } else {
                $this->saldo -= $valor;
                $this->saldo += $this->chequeEspecial;
                $contaDestino->saldo += $valor;
            }
        }

        public function pagarChequeEspecial($valor) {
            $this->saldo += $valor;
        }

        public function aumentarChequeEspecial($valor) {
            $this->chequeEspecial += $valor;
        }

    }


?>