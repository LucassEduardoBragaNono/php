<?php
    class Pessoa {

        public function __construct(
            private string $nome = '',
            protected string $cpf = '',
            int $ddd, string $numero, $pessoa, protected array $telefone = array()
        )
        {
            $this->telefone[] = new Telefone($ddd, $numero, $pessoa);
        }


        public function getNome(){
            return $this->nome;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function setTelefone($ddd, $numero, $pessoa){
            $this->telefone[] = new Telefone($ddd, $numero, $pessoa);
        }
    }

    //Pessoa e Telefone = composição
?>

