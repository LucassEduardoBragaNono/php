<?php
    class Emprestimo {

        function __construct(
            private string $data_emprestimo = '',
            private $aluno = null,
            $data_devolucao = '', protected array $itens = array()
        )
        {
            $this->itens[] = new Itens($data_devolucao);
        }

        public function getData_emprestimo(){
            return $this->data_emprestimo;
        }

        public function setData_emprestimo(){
            $this->data_emprestimo = $data_emprestimo;
        }

        public function getAluno(){
            return $this->aluno;
        }

        public function setAluno($aluno){
            $this->aluno = $aluno;
        }

        public function getItens(){
            return $this->itens;
        }

        public function setItens($data_devolucao){
            $this->itens[] = new Itens($data_devolucao);
        }
    }