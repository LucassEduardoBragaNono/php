<?php
    class Publicacoes {

        function __construct(
            private string $data_publicacao = '',
            private string $titulo = '',
            private $editora = null
        ){}

        public function getData_publicacao(){
            return $this->data_publicacao;
        }

        public function setData_publicacao($data_publicacao){
            $this->data_publicacao = $data_publicacao;
        }
        
        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function getEditora(){
            return $this->editora;
        }

        public function setEditora($editora){
            $this->editora = $editora;
        }
    }