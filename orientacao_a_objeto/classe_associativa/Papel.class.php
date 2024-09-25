<?php
    class Papel
    {
        public function __construct(
            private string $nome = '',
            private $ator = null,
            private $filme = null
        ){}

        public function getNome(){
            return $this->nome;
        }

        public function getAtor(){
            return $this->ator;
        }

        public function getFilme(){
            return $this->filme;
        }
    }