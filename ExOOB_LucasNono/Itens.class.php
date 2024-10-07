<?php
    class Itens {

        function __construct(
            private string $data_devolucao = '',
            private $emprestimo = null,
            private $livro = null
        ){}

        public function getData_devolucao(){
            return $this->data_devolucao;
        }

        public function setData_devolucao(){
            $this->data_devolucao = $data_devolucao;
        }

        public function getEmprestimo(){
            return $this->emprestimo;
        }

        public function setEmprestimo($emprestimo){
            $this->emprestimo = $emprestimo;
        }

        public function getLivro(){
            return $this->livro;
        }

        public function setLivro($livro){
            $this->livro = $livro;
        }
    }