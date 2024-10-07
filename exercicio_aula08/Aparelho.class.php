<?php
    class Aparelho {

        public function __construct(
            private string $descritivo = '',
            private array $aluno = array()
        ){}

        public function getDescritivo(){
            return $this->descritivo;
        }

        public function setDescritivo(){
            $this->descritivo = $descritivo;
        }

        public function getAluno(){
            return $this->aluno;
        }

        public function setAluno($aluno){
            $this->aluno[] = $aluno;
        }
    }
    //Aparelho e Aluno - Associação Bilateral
?>