<?php
    class Genero {

        function __construct(
            private string $descritivo = '',
        ){}

        public function getDescritivo(){
            return $this->descritivo;
        }

        public function setDescritivo(){
            $this->descritivo = $descritivo;
        }
    }