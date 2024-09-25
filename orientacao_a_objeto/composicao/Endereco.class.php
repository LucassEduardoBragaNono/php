<?php

    class Endereco
    {
        public function __construct(
            private string $logradouro = '',
            private string $numero = '',
            private string $cep = '',
            // private Pessoa $pessoa = new Pessoa()
            private $pessoa = null
            ){}

        public function getLogradouro()
        {
            return $this->logradouro;
        }
        public function getNumero()
        {
            return $this->numero;
        }
        public function getCep()
        {
            return $this->cep;
        }
        public function getPessoa()
        {
            return $this->pessoa;
        }
    }