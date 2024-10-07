<?php
    class Aluno extends Pessoa{

        public function __construct(
            private string $ra = '',
            $nome = ''
        )
        {
            parent::__construct($nome);
        }

        public function getRa(){
            return $this->ra;
        }

        public function setRa(){
            $this->ra = $ra;
        } 
    }
