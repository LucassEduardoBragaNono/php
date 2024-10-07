<?php
    class Pessoa {

        function __construct(
            private string $nome = '',
        ){}

        public function getNome(){
            return $this->nome;
        }

        public function setSinopse(){
            $this->nome = $nome;
        }
    }