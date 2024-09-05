<?php
    class Horario{
        public function __construct(
            private string $horario = "",
            private string $hora = ""
        ){}
            
            public function getHorario()
            {
                return $this->horario;
            }

            public function setHorario($horario)
            {
                return $this->horario = $horario;
            }

            public function getHora()
            {
                return $this->hora;
            }

            public function setHora($hora)
            {
                return $this->hora = $hora;
            }
    }
?>