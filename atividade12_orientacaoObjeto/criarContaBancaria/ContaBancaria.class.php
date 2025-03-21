<?php

    class ContaBancaria {

        //definicao dos atributos
        public $banco;
        public $agencia;
        public $tipoConta;
        public $limiteChequeEspecial;

        /*
        function __construct($banco, $agencia, $tipoConta, $limiteChequeEspecial) {
            $this->banco = $banco;
            $this->agencia = $agencia;
            $this->tipoConta = $tipoConta;
            $this->limiteChequeEspecial = $limiteChequeEspecial;
        }
        */

        //criando os metodos da classe
        
        function exibirDados() {

            $codigoConta = str_pad(rand(1, 9999), 8, "0", STR_PAD_LEFT);

            echo "<b>Tipo: </b>" . $this->tipoConta . "</br>";
            echo "<b>Banco: </b>" . $this->banco . "</br>";
            echo "<b>Agencia: </b>" . $this->agencia . "</br>";
            echo "<b>Conta: </b>" . $codigoConta . "</br>";
            echo "<b>Cheque especial: </b>" . $this->limiteChequeEspecial . "</br></br>";
            
        }

    }


?>