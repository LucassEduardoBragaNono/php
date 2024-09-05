<?php
    class Paciente
    {
        public function __construct(
            private string $nome = "",
            private string $rg = "",
            private string $endereco = "",
            private string $data_nasc = "",
            private string $profissao = ""
        )
        {}


        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            return $this->nome = $nome;
        }

        public function getRg()
        {
            return $this->rg;
        }

        public function setRg($rg)
        {
            return $this->rg = $rg;
        }

        public function getEndereco()
        {
            return $this->endereco;
        }

        public function setEnderec0($endereco)
        {
            return $this->endereco = $endereco;
        }

        public function getData_nasc()
        {
            return $this->data_nasc;
        }

        public function setData_nasc($data_nasc)
        {
            return $this->data_nasc = $data_nasc;
        }

        public function getProfissao()
        {
            return $this->profissao;
        }

        public function setProfissao($profissao)
        {
            return $this->profissao = $profissao;
        }
    }
?>