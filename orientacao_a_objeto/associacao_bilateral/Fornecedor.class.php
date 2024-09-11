<?php
    class Fornecedor
    {
        public function __construct(
            private string $razao_social = "",
            private string $cnpj = "",
            private string $telefone = "",
            private array $produto = array()
        ){}
    }