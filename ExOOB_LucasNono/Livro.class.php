<?php
    class Livro extends Publicacoes{

        function __construct(
            private string $sinopse = '',
            private string $isbnn = '',
            $data_publicacao = '', $titulo = '',
            private array $autor = array(),
            private array $generos = array()
        )
        {
            parent::__construct($data_publicacao, $titulo);
        }

        public function getSinopse(){
            return $this->sinopse;
        }

        public function setSinopse($sinopse){
            $this->sinopse = $sinopse;
        }
        public function getIsbnn(){
            return $this->isbnn;
        }

        public function setIsbnn($isbnn){
            $this->isbnn = $isbnn;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function setAutor(Autor $autor) {
            $this->autor[] = $autor;
        }

        public function getGeneros() {
            return $this->generos;
        }
    
        public function setGenero(Genero $genero) {
            $this->generos[] = $genero;
        }
    }