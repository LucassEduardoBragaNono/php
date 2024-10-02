<?php
    class Aluno extends Pessoa{

        public function __construct(
            private string $restricoes = '',
            private string $data_nasc = '',
            $nome = '', $cpf = '', $ddd = 0, $numero = '', $pessoa = null, //nao sao atributos, sao parametros
            private array $aparelho = array()
        )
        {
            parent::__construct($nome, $cpf, $ddd, $numero, $pessoa); //telefone nao precisa pq ja tem la nos {}, tb da para colocar
        } //sem nada aqui, mas tem q botar os valor, mas nao faça isso

        public function getRestricoes(){
            return $this->restricoes;
        }

        public function getDatanasc(){
            return $this->data_nasc;
        }

        public function getAparelho(){
            return $this->aparelho;
        }

        public function setRestricoes(){
            $this->restricoes = $restricoes;
        }

        public function setDatanasc(){
            $this->data_nasc = $data_nasc;
        }

        public function setAparelho($aparelho){
            $this->aparelho[] = $aparelho;
        }
        

        //Aluno herda de pessoa, Pessoa é a classe Genérica ou Pai e Aluno é filho, Pessoa não herda de aluno
    }
?>