<?php
    class Consulta {
        public function __construct(
            private string $historico = ""
        ){}

            public function getHistorico()
            {
                return $this->historico;
            }

            public function setHistorico($historico)
            {
                return $this->historico = $historico;
            }
    }
?>