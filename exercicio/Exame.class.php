<?php
    class Exame extends Servico
    {
        public function __construct(
            private string $medida_prevendiva = "",
            private string $tipo_exame = "",
            private string $descricao = "",
            private string $preco = ""
        )
        {
            parent::__construct($descricao, $preco);
        }

            public function getMedida_preventiva()
            {
                return $this->medida_preventiva;
            }

            public function setMedida_preventiva($medida_prevendiva)
            {
                return $this->medida_preventiva = $medida_prevendiva;
            }

            public function getTipo_exame()
            {
                return $this->tipo_exame;
            }

            public function setTipo_exame($tipo_exame)
            {
                return $this->tipo_exame = $tipo_exame;
            }
    }
?>