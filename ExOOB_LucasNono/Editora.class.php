<?php
    class Editora extends Pessoa {

        function __construct(
            private string $cnpj = '',
            $nome = '', $data_publicacao = '', $titulo = '', protected array $publicacao = array()
        )
        {
            parent::__construct($nome);
            $this->publicacao[] = new Publicacoes($data_publicacao, $titulo);
        }

        public function getCnpj(){
            return $this->cnpj;
        }

        public function getPublicacao(){
            return $this->publicacao;
        }

        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }

        public function setPublicacao($data_publicacao, $titulo){
            $this->publicacao[] = new Publicacoes($data_publicacao, $titulo);
        }
    }