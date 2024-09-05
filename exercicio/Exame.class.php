<?php
    class Exame extends Paciente
    {
        public function __construct(
            private string $medida_prevendiva = "",
            private string $tipo_exame = "",
            private string $nome = "",
            private string $rg = "",
            private string $endereco = "",
            private string $data_nasc = "",
            private string $profissao = ""
        )
        {
            parent::__construct($nome, $rg, $endereco, $data_nasc, $profissao);
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