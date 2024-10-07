<?php
    class Revista extends Publicacoes{

        function __construct(
            private string $numero = '',
            private string $issn = '',
            $data_publicacao = '',  $titulo = ''
        )
        {
            parent::__construct($data_publicacao, $titulo);
        }

        public function getNumero(){
            return $this->numero;
        }

        public function setNumero(){
            $this->numero = $numero;
        }
        
        public function getIssn(){
            return $this->issn;
        }

        public function setIssn(){
            $this->issn = $issn;
        }
    }