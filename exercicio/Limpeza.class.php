<?php
    class Limpeza extends Paciente
    {
        public function __construct(
            private string $material_usado = "",
            private string $dente_tratado = "",
            private string $nome = "",
            private string $rg = "",
            private string $endereco = "",
            private string $data_nasc = "",
            private string $profissao = ""
        )
        {
            parent::__construct($nome, $rg, $endereco, $data_nasc, $profissao);
        }

            public function getMaterial_usado()
            {
                return $this->material_usado;
            }

            public function setMaterial_usado($material_usado)
            {
                return $this->material_usado = $material_usado;
            }

            public function getDente_tratado()
            {
                return $this->dente_tratado;
            }

            public function setDente_tratado($dente_tratado)
            {
                return $this->dente_tratado = $dente_tratado;
            }
    }
?>