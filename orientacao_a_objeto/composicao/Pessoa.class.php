<?php

    class Pessoa
    {
        public function __construct(
            private string $nome = '',
            private string $cpf = '',
            string $logradouro = '',
            string $numero = '',
            string $cep = '',
            $pessoa = null
        )
        {
            $this->endereco[] = new Endereco($logradouro, $numero, $cep, $pessoa);
        }

        public function getNome()
        {
            return $this->nome;
        }
        public function getCpf()
        {
            return $this->cpf;
        }
        public function getEndereco()
        {
            return $this->endereco;
        }
        public function setEndereco($logradouro, $numero, $cep, $pessoa)
        {
            $this->endereco[] = new Endereco($logradouro, $numero, $cep, $pessoa);
        }
    }