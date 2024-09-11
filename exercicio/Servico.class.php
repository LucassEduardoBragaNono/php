<?php
    class Servico {
        public function __construct(
            private string $descricao = "",
            private float $preco = 0.00
        ){}

            public function getDescricao()
            {
                return $this->descricao;
            }

            public function setDescricao($descricao)
            {
                return $this->descricao = $descricao;
            }

            public function getPreco()
            {
                return $this->preco;
            }

            public function setPreco($preco)
            {
                return $this->preco = $preco;
            }
    }
?>