<?php
    class Fornecedor
    {
        public function __construct(
            private string $razao_social = "",
            private string $cnpj = "",
            private string $telefone = "",
            private array $produto = array()
        ){}

        public function getRazao_social()
        {
            return $this->razao_social;
        }

        public function getCnpj()
        {
            return $this->cnpj;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function getProduto()
        {
            return $this->produto;
        }

        public function setProduto(Produto $produto)
        {
            $this->produto[] = $produto;
        }
    }