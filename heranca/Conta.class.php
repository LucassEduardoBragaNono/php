<?php
    class Conta
    {
        public function __construct(
            protected string $agencia = "",
            protected string $numero = "",
            protected string $titular = "",
            protected float $saldo = 0.00
            )
            {

            }

            //     

            public function getAgencia()
            {
                return $this->agencia;
            }

            public function setAgencia(string $agencia)
            {
                return $this->agencia = $agencia;
            }

            public function getNumero()
            {
                return $this->numero;
            }

            public function setNumero(string $numero)
            {
                return $this->numero = $numero;
            }

            public function getTitular()
            {
                return $this->titular;
            }

            public function setTitular(string $titular)
            {
                return $this->titular = $titular;
            }

            public function getSaldo()
            {
                return $this->saldo;
            }

            public function setSaldo(float $saldo)
            {
                return $this->saldo = $saldo;
            }

            //

            public function Sacar(float $valor)
            {
                $this->saldo -=$valor;
                // ou $this->saldo = $this->saldo - $valor;
            }
            public function Depositar(float $valor)//da pra tipar, mas se botar errado o bixo morde
            {
                $this->saldo +=$valor;
            }
    }
?>