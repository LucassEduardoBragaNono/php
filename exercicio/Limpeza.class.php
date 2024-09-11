<?php
    class Limpeza extends Servico
    {
        public function __construct(
            private string $material_usado = "",
            private string $dente_tratado = "",
            private string $descricao = "",
            private string $preco = ""
            
        )
        {
            parent::__construct($descricao, $preco);
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