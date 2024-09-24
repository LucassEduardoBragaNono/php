<?php
    class Produto
    {
        public function __construct(
            private string $nome = "",
            private string $descricao = "",
            private float $precos = 0.00,
            private int $estoque = 0,
            private array $fornecedor = array()
        ){}

        public function getNome()
        {
            return $this->nome;
        }

        public function getDescricao()
        {
            return $this->descricao;
        }

        public function getPrecos()
        {
            return $this->precos;
        }

        public function getEstoque()
        {
            return $this->estoque;
        }

        public function getFornecedor()
        {
            return $this->fornecedor;
        }

        public function setFornecedor(Fornecedor $fornecedor)
        {
            $this->fornecedor[] = $fornecedor;
        }
    }