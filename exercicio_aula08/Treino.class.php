<?php
    class Treino {

        public function __construct(
            private int $series = 0,
            private string $repeticoes = '',
            private $instrutor = null,
            private $aluno = null,
            private $aparelho = null
        ){}

        public function getSeries(){
            return $this->series;
        }

        public function getRepeticoes(){
            return $this->repeticoes;
        }

        public function setSeries(){
            $this->series = $series;
        }

        public function setRepeticoes(){
            $this->repeticoes = $repeticoes;
        }

        public function getInstrutor(){
            return $this->instrutor;
        }

        public function setInstrutor($instrutor){
            $this->instrutor = $instrutor;
        }

        public function getAluno(){
            return $this->aluno;
        }

        public function setAluno($aluno){
            $this->aluno[] = $aluno;
        }

        public function getAparelho(){
            return $this->aparelho;
        }

        public function setAparelho($aparelho){
            $this->aparelho[] = $aparelho;
        }
    }

    //Treino e Instrutor - unilateral, qm ta na ponta da seta vai pro outro lado
    //Treino e Aluno+Aparelho - classe associativa, recebe para fazer a relação um objeto de cada
?>