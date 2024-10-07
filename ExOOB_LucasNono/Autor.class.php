<?php
    class Autor extends Pessoa{

        function __construct(
            private string $nacionalidade = '',
            $nome = ''
        )
        {
            parent::__construct($nome);
        }

        public function getNacionalidade(){
            return $this->nacionalidade;
        }

        public function setRestricoes(){
            $this->nacionalidade = $nacionalidade;
        }
    }