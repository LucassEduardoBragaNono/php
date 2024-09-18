<?php
    class Produto
    {
        public function __construct(
            private string $nome = "",
            private string $descricao = "",
            private float $precos = 0.00,
            private int $estoque = 0,
            private $categoria = null //objeto fracamente tipado || pd ser dql jeito private Categoria $categoria = new Categoria() so q sempre vai ter que ter a categoria
            
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

        public function getCategoria()
        {
            return $this->categoria;
        }
        // public function getFornecedor()
        // {
        //     return $this->fornecedor;
        // }

        // public function setFornecedor(Fornecedor $fornecedor)
        // {
        //     $this->fornecedor[] = $fornecedor;
        // }
    }